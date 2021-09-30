<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function submit()
    {
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,
      'https://payment-sandbox.portwallet.com/payment/?invoice=Your_Invoice_ID');
			curl_setopt($ch, CURLOPT_HTTPHEADER,FALSE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
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
	}
    }
}
