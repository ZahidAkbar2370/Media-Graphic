<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use Sentinel;
use Redirect;
use File;
use Mail;

class QuotationController extends Controller
{
    public function devis(){
        return view('devis');

    }
    public function mydevis(){
        $quotations = Quotation::where('email',Sentinel::getUser()->email)->get();
        return view('devis.index',compact('quotations'));

    }
    public function traiter(){
        $quotations = Quotation::where('status',0)->get();
        return view('admin.devis.index',compact('quotations'));
    }
    public function encours(){
        $quotations = Quotation::where('status',1)->get();
        return view('admin.devis.index',compact('quotations'));
    }
    public function admindevis(){
        $quotations = Quotation::where('status','<',3)->get();
        return view('admin.devis.index',compact('quotations'));
    }

    public function editdevis($id){
        $quotation = Quotation::findorfail($id);
        return view('admin.devis.edit',compact('quotation'));
    }
    public function save_plans_life(Request $request){
        $image = '';
        $Quotation = new Quotation();
        $Quotation->type = 'plan_file';
        $Quotation->first_name = Sentinel::getUser()->first_name;
        $Quotation->last_name = Sentinel::getUser()->last_name;
        $Quotation->email = Sentinel::getUser()->email;
        $Quotation->phone = Sentinel::getUser()->phone;
        $Quotation->postalcode = Sentinel::getUser()->postal;
        $Quotation->city = Sentinel::getUser()->city;
        $Quotation->quantity = $request->get('quantity');
        $Quotation->Impression = $request->get('Impression');
        $Quotation->shaping = $request->get('shaping');
        $Quotation->finishing = $request->get('finishing');
        $Quotation->catridge = $request->get('catridge');
        $Quotation->comment = $request->get('comment');
        if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Quotation->image = $safeName;

        }
        if($Quotation->save() == true){
            $quotation = Quotation::findorfail($Quotation->id);
            $response = Mail::send('emails.quotation',['quotation' => $quotation], function ($m) use ($quotation){

                $m->from($quotation->email);

                $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

                $m->subject('New Quotation');

               // $m->attachData($pdf->output(), "receipt.pdf");

            });
            // if (Mail::failures()) {
            //     return back()->with('error', Mail::failures());
            // }
            return Redirect::back()->with('success','Your plan file quotation forwerded to the admin.');
        }else{
            return Redirect::back()->with('error','Something went wrong.');
        }
    }
    public function updatedevis(Request $request,$id){
        $quotation = Quotation::findorfail($id);
        $quotation->amount_include_tax = $request->get('ttc');
        $quotation->amount_exclude_tax = $request->get('ht');
        $quotation->status = 1;
        $quotation->save();
        # # # after updation get again record
        $quotation = Quotation::findorfail($id);
        $response = Mail::send('emails.quotation-offer',['quotation' => $quotation], function ($m) use ($quotation){

            $m->from('support@etradeverse.com');

            $m->to('zeeshanzaheer574@gmail.com','Hello Admin');
            $m->to($quotation->email,$quotation->first_name.' '.$quotation->last_name);

            $m->subject('New Quotation');

           // $m->attachData($pdf->output(), "receipt.pdf");

        });
        return Redirect::to('admin/devis')->with('success','Devis has been updated.');
    }


    public function save(Request $request){
    	$image = '';
    	$Quotation = new Quotation();
    	$Quotation->first_name = $request->get('first_name');
    	$Quotation->last_name = $request->get('last_name');
    	$Quotation->email = $request->get('email');
    	$Quotation->phone = $request->get('phone');
    	$Quotation->postalcode = $request->get('postal');
    	$Quotation->city = $request->get('city');
    	$Quotation->description = $request->get('message');
    	if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Quotation->image = $safeName;

        }
    	if($Quotation->save() == true){
    		$quotation = Quotation::findorfail($Quotation->id);
    		$response = Mail::send('emails.quotation',['quotation' => $quotation], function ($m) use ($quotation){

	            $m->from($quotation->email);

	            $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

	            $m->subject('New Quotation');

	           // $m->attachData($pdf->output(), "receipt.pdf");

	        });
	        // if (Mail::failures()) {
	        //     return back()->with('error', Mail::failures());
	        // }
	    	return Redirect::back()->with('success','Votre demande a bien été envoyée, nous vous répondrons dans les meilleurs délais.');
    	}else{
    		return Redirect::back()->with('error','Something went wrong.');
    	}
    	

    }
}
