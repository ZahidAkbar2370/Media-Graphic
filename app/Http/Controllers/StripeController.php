<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;
class StripeController extends Controller
{
    /**
     * handling payment with POST
     */
    public static function chargePaymentFromToken($token,$amount,$currency = 'eur',$descrption = 'Payment')
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
		    return Stripe\Charge::create ([
	                "amount" => 100 * $amount,
	                "currency" => $currency,
	                "source" => $token,
	                "description" => $descrption 
	        ]);
		} catch(Stripe\Exception\CardException $e) {
		    return "A payment error occurred: {$e->getError()->message}";
		} catch (Stripe\Exception\InvalidRequestException $e) {
		    return "Stripe An invalid request occuurred.";
		} catch (Exception $e) {
		    return "Stripe Another problem occurred, maybe unrelated to Stripe.";
		}
        
    }
}