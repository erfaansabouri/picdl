<?php

namespace App\Http\Controllers;

use App\Models\CreditPackage;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function send(Request $request)
    {
        $amount = $request->amount ?? 0;
        $callback_url = route('payment.verify');

        if($request->credit_package_id)
        {
            $credit_package = CreditPackage::query()->findOrFail($request->credit_package_id);
            $credit_package_id = $credit_package->id;
            $amount = $credit_package->price;
        }

        $transaction = Transaction::query()
            ->create([
                'user_id' => Auth::guard('web')->user()->id,
                'credit_package_id' => $credit_package_id ?? null,
                'status' => Transaction::STATUSES['پرداخت نا موفق'],
                'amount' => $amount,
            ]);
        $response = zarinpal()
            ->merchantId('45c26d30-3d65-450d-94a8-43eb32190f28')
            ->amount($amount)
            ->request()
            ->description("PICDL BUY")
            ->callbackUrl($callback_url)
            ->mobile("")
            ->email("")
            ->send();

        if (!$response->success()) {
            $transaction->status = Transaction::STATUSES['خطا در اتصال به درگاه'];
            $transaction->save();
            return $response->error()->message();
        }


        $transaction->authority = $response->authority();
        $transaction->save();

        return $response->redirect();
    }

    public function verify(Request $request)
    {
        $authority = request()->query('Authority');
        $status = request()->query('Status');

        $transaction = Transaction::query()
            ->where('authority', $authority)
            ->firstOrFail();

        if ($status == 'NOK')
        {
            $transaction->status = Transaction::STATUSES['پرداخت نا موفق'];
            $transaction->save();
            return redirect()->route('profile.dashboard');
        }

        $response = zarinpal()
            ->merchantId('45c26d30-3d65-450d-94a8-43eb32190f28')
            ->amount($transaction->amount)
            ->verification()
            ->authority($authority)
            ->send();

        if (!$response->success()) {
            $transaction->status = Transaction::STATUSES['پرداخت نا موفق'];
            $transaction->save();
            return $response->error()->message();
        }

        $cart_pan = $response->cardPan();
        $transaction->paid_at = Carbon::now();
        $transaction->status = Transaction::STATUSES['پرداخت شده'];
        $transaction->save();
        return redirect()->route('profile.dashboard');
    }
}
