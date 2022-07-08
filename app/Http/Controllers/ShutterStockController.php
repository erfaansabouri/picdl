<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShutterStockController extends Controller
{
    public function index(Request $request)
    {
        if(is_numeric($request->q))
        {
            $shutterstock_id = $request->q;
            return view('website.sources.shutterstock.show', compact('shutterstock_id'));
        }
        $result = getImagesShutterstock($request->q,1,10);
        $q = $request->q;
        return view('website.sources.shutterstock.index', compact('result', 'q'));
    }

    public function show($shutterstock_id)
    {
        return view('website.sources.shutterstock.show', compact('shutterstock_id'));
    }

    public function downloadViaCredit($shutterstock_id)
    {
        $user = Auth::guard('web')->user();
        $product = getSingleImageShutterstock($shutterstock_id);
        if($user->credit_count >= getSourceCreditCostForSingleFile(1,$product->media_type))
        {
            $link = Download::getDownloadLink(1, $shutterstock_id);
            if(!$link) abort(404);
            $user->credit_count -= getSourceCreditCostForSingleFile(1,$product->media_type);
            $user->save();

            $full_path = getenv('APP_URL').'/storage/'.$link->path;
            return redirect($full_path);
        }

    }


    public function showSingleApi()
    {
        $SHUTTERSTOCK_API_TOKEN = 'v2/TGRSVTRzbWl5ZWduZ0dNQVRJY0ZFNUhBYlBzRzROdHMvMjAxNTc0MzA5L2N1c3RvbWVyLzQvQ2t6WktyZkRfeDN0V3U1QVNJa3ZOV09VdVp0Qlh6SnRPeEdNeHM0c3pLVC1NVzQybnRQMVZ6TndXV2JPbG9HMExlVWJqeUhfeFdOcm1SVF81ei1kQ3NaZ1ZWbi1oMUlCNFEyRVg1eEJDR19sdlBhNVROMnRqS294NU1VR1pyTmQ3ZEdnRHR4WTJtUEZFN29WaEtwckJyS2l2RnZZelg2UFNrbDlRNFhCcC12SEdxWVJmSFVmbXhzcmpZV2hKcnNQWEs1SC0xY1I1LUJNdzhoUGEta0RNUS8wOUVVUUN4WkZxV1ZWSkl1OS10ZWlB';

        $options = [
            CURLOPT_URL => "https://api.shutterstock.com/v2/images/298063157",
            CURLOPT_USERAGENT => "php/curl",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $SHUTTERSTOCK_API_TOKEN"
            ],
            CURLOPT_RETURNTRANSFER => 1
        ];

        $handle = curl_init();
        curl_setopt_array($handle, $options);
        $response = curl_exec($handle);
        curl_close($handle);

        $decodedResponse = json_decode($response);
        dd($decodedResponse);
    }
}
