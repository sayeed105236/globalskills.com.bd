<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Payment;
use App\Models\User;
use App\Models\Checkout;
use Auth;
class PaymentController extends Controller
{

    public function submit()
    {
      // STart CURL

    // $ch = curl_init('https://api.portwallet.com/payment/v2/invoice');

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,'https://api-sandbox.portwallet.com/payment/v2/invoice');

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $this->authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);
    // END CURL;

    $responseData = json_decode($response);
    if ($responseData->result == "success") {
      $this->session->set_userdata('portwallet_invoice_id', $responseData->data->invoice_id);
      $this->session->set_userdata('portwallet_invoice_amount', $responseData->data->order->amount);


      redirect($responseData->data->action->url);
    } else {
      if ($responseData->error->property == "billing.customer.phone") {
        $this->session->set_flashdata('portwallet_error', 'Please save your valid phone number.');
      } else {
        $this->session->set_flashdata('portwallet_error', $responseData->error->explanation);
      }

      if ($from == 'shopping_cart') {

        redirect(base_url('home/shopping_cart'));
      } else {
        // debug($responseData);
        redirect(base_url('user/payment_history'));
      }
    }
    // redirect($responseData->data->action->url);

  }
  public function StoreCheckout(Request $request)
  {

    $course_id = $request->course_id;
    $course_category_id=$request->course_category_id;
    $user_id = $request->user_id;
    $request= $request->amount;
    $ip_address=$request->ip();
    dd($request);



      if (Auth::check()) {

                  $checkout= Checkout::where('user_id',Auth::id())

                              ->where('course_id',$request->course_id)

                              ->first();
      }

                  $checkout = new Checkout();

                  if (Auth::check()) {
                    $checkout->user_id= Auth::id();
                    $checkout->course_id = $course_id;
                    $checkout->course_category_id= $course_category_id;
                    $checkout->ip_address= $ip_address;
                    $checkout->amount= $amount;


                    $checkout->save();
                      return back()->with('booking_added','You have booked the course successfully! You will get an email or phone after confirmation. For any queries call at +8801766343434');
                  }else {
                    return Redirect('register');
                  }


  }
      public function ManageCheckout($id)
      {
        dd($id);
      }

}
