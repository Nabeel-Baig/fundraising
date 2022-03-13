<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\donations\StoreDonationRequest;
use App\Models\Fund;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DonationController extends Controller
{
    final public function index(Fund $fund): View
    {
        return view('front.donate', compact('fund'));
    }

    public function donationPost(StoreDonationRequest $request)
    {
        try {
            $order = \App\Models\Order::create([
                'user_id' => (Auth::check()) ? auth()->user()->id : NULL,
                'fund_id' => (int)$request->input('fund_id'),
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'zipcode' => $request->zipcode,
                'description' => $request->description,
                'amount' => $request->amount,
                'payment_status' => 'Unpaid'
            ]);
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $customer = \Stripe\Charge::create([
                "amount" => (float)$request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $request->description
            ]);
            if ($customer->status == 'succeeded') {
                $order->payment_status = 'Paid';
                $order->save();

                $payment = new Payment();
                $payment->user_id = $order->user_id;
                $payment->order_id = $order->order_id;
                $payment->stripe_id = $request->stripeToken;
                $payment->amount = $request->amount;
                $payment->balance_transaction = $customer->balance_transaction;
                $payment->currency = $customer->currency;
                $payment->description = $customer->description;
                $payment->payment_id = $customer->id;
                $payment->country = $customer->source->country;
                $payment->exp_month = $customer->source->exp_month;
                $payment->exp_year = $customer->source->exp_year;
                $payment->fingerprint = $customer->source->fingerprint;
                $payment->card_number = $customer->source->last4;
                $payment->receipt_url = $customer->receipt_url;
                $payment->save();
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return back();
    }
}
