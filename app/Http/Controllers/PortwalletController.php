<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PortWallet\Exceptions\PortWalletException;
use Session;

use PortWallet\PortWallet;
use PortWallet\PortWalletClient;
use PortWallet\Exceptions\PortWalletClientException;

class PortwalletController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function portwallet()
    {
        return view('portwallet');
    }*/

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function PortwalletPost(Request $request)
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
    }*/



    /**
     *
     * $appKey: application key you have to
     * generate form our sandbox panel
     *
     * $apiSecret: application secret key
     * you have to generate form
     * our sandbox panel
     *
     */


    /**
     * mode switching default "sandbox"
     */

    public function __construct()
    {

    }

    public function index(){
        //dd($this,PortWallet::getApiMode());

        //$apiKey = "a3b4d161e2963d91fd081e1e9022e160";
        //$apiSecret = "91591af022cef73f59abdbfe54ffe114";
        //$apiKey = "fde409259497bab63ce09e133dbdf0d7";
        //$apiSecret = "1bd2edd201a0f61832af2c15e4344724";
        //$this->api_base_sandbox = 'https://api-sandbox.portwallet.com/payment/v2/';

        //Portwallet::setApiKey(env('STRIPE_SECRET'));
        //dd(PortWallet::getApiMode());
        if (PortWallet::getApiMode() == "sandbox") {

            $this->api_url = 'https://api-sandbox.portwallet.com/payment/v2/ ';
            $this->app_key = 'fde409259497bab63ce09e133dbdf0d7';
            $this->secret_key = '1bd2edd201a0f61832af2c15e4344724';

        } else {
            $this->api_url = 'https://api.portwallet.com/payment/v2/invoice';
            $this->app_key = '23b844c80146b36df469b0cf63d5080e';
            $this->secret_key = 'a017c8cadeb13d7a9a72ec902573c287';

        }

        PortWallet::setApiMode("live");
//N.B.: API mode should be set first before creating an instance of PortWalletClient

        /**
         * initiate the PortWallet client
         */
        //dd($this->app_key);
        $portWallet = new PortWalletClient($this->app_key, $this->secret_key);
        //$authorization = “Bearer “. base64_encode(APPKEY.”:”.md5(SECRETKEY.time()));
//dd($portWallet);
       /**
        * Your data
        */
       $data = array(
           'order' => array(
               'amount' => 100.0,
               'currency' => 'BDT',
               'redirect_url' => 'http://www.yoursite.com/payment',
               'ipn_url' => 'http://www.yoursite.com/ipn',
               'reference' => 'ABC123',
               'validity' => 900,
           ),
           'product' => array(
               'name' => 'x Polo T-shirt',
               'description' => 'x Polo T-shirt with shipping and handling',
           ),
           'billing' => array(
               'customer' => array(
                   'name' => 'Robbie Amell',
                   'email' => 'test@example.com',
                   'phone' => '801234567893',
                   'address' => array(
                       'street' => 'House 1, Road1, Gulshan 1',
                       'city' => 'Dhaka',
                       'state' => 'Dhaka',
                       'zipcode' => 1212,
                       'country' => 'BGD',
                   ),
               ),
           ),
           'discount' => array(
               'enable' => 1,
               'codes' => array(
                   0 => 'Bengal 1',
                   1 => 'Bengal 2',
               ),
           ),
           'emi' => [
               'enable' => 1,
               'tenures' => [],
           ]
       );

       try {

           $invoice = $portWallet->invoice->create($data);
           //dd($invoice);
           $paymentUrl = $invoice->getPaymentUrl();
           //dd($paymentUrl,'k');
       } catch (InvalidArgumentException $ex) {
           echo $ex->getMessage();
       }catch (PortWalletException $ex) {
           echo $ex->getMessage();
       }
//dd($paymentUrl);
        return redirect($paymentUrl);
       //dd($paymentUrl);
        //header("location: {$paymentUrl}");
     //  header("location: {https://payment.portwallet.com/payment/?invoice=86150B80A7184126}");
   }

}
