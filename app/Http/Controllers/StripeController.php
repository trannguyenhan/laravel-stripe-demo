<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function success()
    {
        return view('success');
    }

    public function cancel()
    {
        return view('cancel');
    }

    public function payStripe(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $checkoutSession = Session::create([
            'line_items' => [[
                'price' => 'price_1Q0Q5GHGTpXzW5bV1645uGi6',
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return redirect($checkoutSession->url);
    }
}
