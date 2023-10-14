<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request){
        $validated = $request->validate([
            'booking_id' => 'required',
            'total_amount' => 'required',
            'tran_id' => 'required',
            'cus_email' => 'required',
            'cus_phone' =>'required',
           
        ]);
        if($validated){
            $book_id = $request->input('booking_id');
                $data = [
                'store_id' => 'jayga65056056e685d',
                'store_passwd' => 'jayga65056056e685d@ssl',
                'total_amount' => $request->input('total_amount'),
                'currency' => 'BDT',
                'tran_id' => $request->input('tran_id'),
                'product_category' => 'listing',
                'fail_url' => 'failstring.php',
                'success_url' => 'jayga.io',
                'cancel_url' => 'cancel.php',
                'cus_email' => $request->input('cus_email'),
                'cus_add1' => 'sgtgtetgw',
                'cus_city' => 'dvecaecec',
                'cus_country' => 'sevet',
                'cus_phone' => $request->input('cus_phone'),
                'shipping_method' => 'No',
                'product_name' => 'hello',
                'product_category' => 'hello',
                'product_profile' => 'general'

            ];


                $ch = curl_init('https://sandbox.sslcommerz.com/gwprocess/v4/api.php');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

                // execute!
                $response = curl_exec($ch);

                // close the connection, release resources used
                curl_close($ch);

                // do anything you want with your response
               // var_dump($response);
               return response()->json([
                'status' => 200,
                'booking_id' => $book_id,
                'response' => $response
               ]);

        }else{
            return $validated->errors();
        }
        
    }
}
