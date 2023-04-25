<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Error\Card;

class Usercontroller extends Controller
{
    public function call(Request $request) {
        \Stripe\Stripe::setApiKey('sk_test_51N0gi4Ai5owAne51wWXaXl883xm7GZSVnGtkser8tZ7EB79WtNIL90xd6ugDUsElKBVM4t7zYfMTTjC3KuIN8PuY00T4kZj0tq');
        $customer = \Stripe\Customer::create(array(
          'name' => 'test',
          'description' => 'test description',
          'email' => 'email@gmail.com',
          'source' => $request->input('stripeToken'),
           "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
        try {
            \Stripe\Charge::create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "customer" =>  $customer["id"],
                    "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return view ( 'HOME' );
        } catch 
        ( \Stripe\Error\Card $e )
         {
            Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'HOME' );
        }
    }
}
