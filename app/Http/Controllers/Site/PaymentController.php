<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Throwable;

class PaymentController extends Controller
{
//    public function checkout(Request $request){
//
//        $url = "https://eu-test.oppwa.com/v1/checkouts";
//        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
//            "&amount=".$request->price .
//            "&currency=EUR" .
//            "&paymentType=DB";
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $responseData = curl_exec($ch);
//        if(curl_errno($ch)) {
//            return curl_error($ch);
//        }
//        curl_close($ch);
//        $res =json_decode($responseData,true);
//dd($res);
//         return view('Site.Payment.form')->with(['responseData'=> $res ,'id'=> $request->id]);
//
////        return response()->json([
////            'status' => true,
////            'content' => $view['main']
////        ]);
//    }



    public function request(Request $request ,$id) {
        $url = "https://eu-test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
            "&amount=".$request->price.
            "&currency=EUR" .
            "&paymentType=DB" .
            "&registrations[0].id=8ac7a4a27fce0fab017fcf25fd147ede" .
            "&registrations[1].id=8ac7a4a07fce0fab017fcf25fe010720" .
            "&standingInstruction.source=CIT" .
            "&standingInstruction.mode=REPEATED" .
            "&standingInstruction.type=UNSCHEDULED";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res =json_decode($responseData,true);
//        dd( $responseData , $request);
        return view('Site.Payment.form')->with(['responseData'=> $res ,'id'=>$id]);

    }


}
