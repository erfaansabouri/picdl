<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $user = Auth::guard('web')->user();

        $transactions = Transaction::query()
            ->where('user_id', $user->id)
            ->orderByDesc('id')
            ->take(3)
            ->get();

        return view('website.profile.dashboard', compact('transactions', 'user'));
    }

    public function transactions(Request $request)
    {
        $user = Auth::guard('web')->user();

        $transactions = Transaction::query()
            ->where('user_id', $user->id);

        if($request->search)
        {
            $transactions = $transactions->where('authority', 'like', '%'.$request->search.'%');
        }

        $transactions = $transactions->get();

        return view('website.profile.transactions', compact('transactions'));

    }

    public function userDetails()
    {
        return view('website.profile.user-details');
    }

    public function updateDetails(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'phone_number' => ['required', 'regex:'.User::IRAN_PHONE_NUMBER_REGEX],
            'email' => ['required', 'email'],
            'password' => ['nullable', 'confirmed'],
        ]);

        $user = Auth::user();
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->is_subscribed = $request->is_subscribed == 'on';
        if(!empty($request->password))
            $user->password = bcrypt($request->password);
        $user->save();
        alert()->success('تغییرات انجام شد!', 'با موفقیت انجام شد!');
        return redirect()->back();
    }

    public function tickets()
    {
        $user = Auth::user();
        $tickets = Ticket::query()
            ->where('user_id', $user->id)
            ->get();

        return view('website.profile.tickets', compact('tickets'));
    }

    public function storeTicket(Request $request)
    {
        $request->validate([
            'subject' => ['required'],
            'description' => ['required'],
        ]);
        $user = Auth::user();
        $tickets = Ticket::query()
            ->create([
                'user_id' => $user->id,
                'subject' => $request->subject,
                'description' => $request->description,
            ]);

        return redirect()->route('profile.tickets');
    }
}

