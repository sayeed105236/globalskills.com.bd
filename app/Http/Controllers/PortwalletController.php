<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PortWallet\Exceptions\PortWalletClientException;
use PortWallet\PortWallet;
use PortWallet\PortWalletClient;
use Session;

class PortwalletController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function portwallet()
    {
        return view('portwallet');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function PortwalletPost(Request $request)
    {
        Portwallet::setApiKey(env('STRIPE_SECRET'));
        PortWalletClient::create ([
                "amount" => 100 * 100,
                "currency" => "bdt",
                "source" => $request->stripeToken,
                "description" => "Test payment from globalskills.com.bd"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }



}
