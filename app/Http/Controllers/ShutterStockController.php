<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShutterStockController extends Controller
{
    public function test()
    {
        $SHUTTERSTOCK_API_TOKEN = 'LdRU4smiyegngGMATIcFE5HAbPsG4Nts:'.'SGGOxyrEFePqPVAP';
        $queryFields = [
            "query" => "sunrise"
        ];

        $options = [
            CURLOPT_URL => "https://api.shutterstock.com/v2/images/search?" . http_build_query($queryFields),
            CURLOPT_USERAGENT => "php/curl",
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $SHUTTERSTOCK_API_TOKEN,
            CURLOPT_RETURNTRANSFER => 1
        ];

        $handle = curl_init();
        curl_setopt_array($handle, $options);
        $response = curl_exec($handle);
        curl_close($handle);

        $decodedResponse = json_decode($response);
        dd($decodedResponse);
    }

    public function testApi()
    {
        $SHUTTERSTOCK_API_TOKEN = 'v2/TGRSVTRzbWl5ZWduZ0dNQVRJY0ZFNUhBYlBzRzROdHMvMjAxNTc0MzA5L2N1c3RvbWVyLzQvQ2t6WktyZkRfeDN0V3U1QVNJa3ZOV09VdVp0Qlh6SnRPeEdNeHM0c3pLVC1NVzQybnRQMVZ6TndXV2JPbG9HMExlVWJqeUhfeFdOcm1SVF81ei1kQ3NaZ1ZWbi1oMUlCNFEyRVg1eEJDR19sdlBhNVROMnRqS294NU1VR1pyTmQ3ZEdnRHR4WTJtUEZFN29WaEtwckJyS2l2RnZZelg2UFNrbDlRNFhCcC12SEdxWVJmSFVmbXhzcmpZV2hKcnNQWEs1SC0xY1I1LUJNdzhoUGEta0RNUS8wOUVVUUN4WkZxV1ZWSkl1OS10ZWlB';

        $options = [
            CURLOPT_URL => "https://api.shutterstock.com/v2/user/subscriptions",
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
        //dd($decodedResponse);

        $queryFields = [
            "query" => "tehran",
            "image_type" => "photo",
            "orientation" => "vertical",
        ];

        $options = [
            CURLOPT_URL => "https://api.shutterstock.com/v2/images/search?" . http_build_query($queryFields),
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
