<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StripeController;
use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\Order;
use Sentinel;
use Stripe;
use Redirect;
use File;
use Mail;

class OrderController extends Controller
{
	public function adminEncours(){
		$orders = Order::where('status',0)->get();
		return view('admin.commande.index',compact('orders'));
	}
    public function devisAccept($id,Request $request){
        $user_id = Sentinel::getUser()->id;
        $quotation = Quotation::findorfail($id);
        $order = new Order();
        # # # Stripe Payment Charge
        if($request->has('stripeToken')){
        	$stripeResult = StripeController::chargePaymentFromToken($request->stripeToken,$quotation->amount_include_tax);
        	if(isset($stripeResult->id)){
        		$order->payment_via = 'stripe';
        		$order->charge_id = $stripeResult->id;
        	}else{
        		return Redirect::back()->with('error',$stripeResult);
        	}
        	
        }
        $order->user_id = $user_id;
        $order->quotation_id = $quotation->id;
        $order->description = $quotation->description;
        $order->image = $quotation->image;
        $order->amount_include_tax = $quotation->amount_include_tax;
        $order->amount_exclude_tax = $quotation->amount_exclude_tax;
        if($order->save() == true){
        	$quotation->status = 3;
        	$quotation->save();
        	$quotation = Quotation::findorfail($id);
    		$response = Mail::send('emails.quotation',['quotation' => $quotation], function ($m) use ($quotation){

	            $m->from($quotation->email);

	            $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

	            $m->subject('New Order');

	           // $m->attachData($pdf->output(), "receipt.pdf");

	        });
	        // if (Mail::failures()) {
	        //     return back()->with('error', Mail::failures());
	        // }
	    	return Redirect::back()->with('success','Your quotation has been converted to the order.');
        }
    }
}
