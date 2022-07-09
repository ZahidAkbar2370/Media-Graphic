<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StripeController;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\CommandeDetail;
use App\Models\ProductSetting;
use Sentinel;
use Redirect;
use File;
use Mail;

class CommandeController extends Controller
{
    public function mycommandes(){
        $commandes = Commande::where('user_id',Sentinel::getUser()->id)->get();
        $data['title'] = 'All Commandes';
        return view('commande.index',compact('commandes','data'));

    }
    public function updateProducts(Request $request,$id){
        $data = $request->all();
        ProductSetting::where('type',$id)->delete();
        foreach($data['quantity'] as $key => $d){
            $type = [];
            $type['type'] = $id;
            $type['quantity'] = $data['quantity'][$key];
            $type['first_day_price'] = $data['first_day_price'][$key];
            // $type['second_day_price'] = $data['second_day_price'][$key];
            // $type['third_day_price'] = $data['third_day_price'][$key];
            // $type['fourth_day_price'] = $data['fourth_day_price'][$key];
            $checkExistrecord = ProductSetting::where('type',$id)->where('quantity',$d)->first();
            ProductSetting::create($type);

        }
        return Redirect::back()->with('success','Le produit a été mis à jour.');
    }
    public function adminTraiters(){
        $orders = Commande::where('status',0)->get();
        $data = [];
        $data['title'] = 'Commandes a traiter';
        return view('admin.commande.index',compact('orders','data'));
    }
    public function adminProducts(){
        $commandes = Commande::whereNotNull('type')->get();
        return view('admin.products.index',compact('commandes'));
    }
    public function editProducts ($id){
        $prices = ProductSetting::where('type',$id)->get();
        return view('admin.products.edit',compact('id','prices'));
    }
    public function deleteProducts ($id){
        CommandeDetail::where('commande_id',$id)->delete();
        Commande::where('id',$id)->delete();
        return Redirect::back()->with('success','Le produit a été supprimé');
    }
    public function adminEncours(){
        $orders = Commande::where('status',1)->get();
        $data['title'] = 'Commandes en cours';
        return view('admin.commande.index',compact('orders','data'));
    }
    public function detail ($id){
        $commande = Commande::findorfail($id);
        if($commande->status == 0){
            $status = 'A traiter';
        }elseif($commande->status == 1){
            $status = 'en cours';
        }
        $data['title'] = 'Commande '.$status;
        $data['status'] = $status;
        return view('commande.view',compact('commande','data'));
    }
    public function editcommande ($id){
        $commande = Commande::findorfail($id);
        if($commande->status == 0){
            $status = 'A traiter';
        }elseif($commande->status == 1){
            $status = 'en cours';
        }
        $data['title'] = 'Commande '.$status;
        $data['status'] = $status;
        return view('admin.commande.edit',compact('commande','data'));
    }
    public function statuscommande($st,$id){
        $commande = Commande::findorfail($id);
        $commande->status = $st;
        if($commande->save() == true){
            return Redirect::back()->with('success','Votre statut a été modifié.');
        }else{
            return Redirect::back()->with('error','Quelque chose s\'est mal passé.');
        }
    }
    public function save_command_plan(Request $request){
        $user = Sentinel::getUser();
        $image = '';
        $Commande = new Commande();
        # # # Stripe Payment Charge
        if($request->has('stripeToken')){
            $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken,$request->get('product_cart_totlettc'));
            if(isset($stripeResult->id)){
                $Commande->payment_via = 'stripe';
                $Commande->charge_id = $stripeResult->id;
            }else{
                return Redirect::back()->with('error',$stripeResult);
            }
            
        }
        $Commande->type = 'plan';
        $Commande->user_id = $user->id;
        $Commande->name = $request->get('file_name');
        $Commande->file_format = $request->get('file_format');
        $Commande->print = $request->get('print');
        $Commande->works_type = $request->get('work_type');
        $Commande->paper = $request->get('choose_paper');
        $Commande->shaping = $request->get('shaping');
        $Commande->desired_copies = $request->get('no_of_copies');
        $Commande->maximum_deliver_copies = $request->get('product_quantity');
        $Commande->deliver_date = $request->get('livraison-date');
        $Commande->subtotal = $request->get('product_cart_totalht');
        $Commande->tax = $request->get('product_cart_tva');
        $Commande->total = $request->get('product_cart_totlettc');
        if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file = $safeName;

        }
        if ($file = $request->file('image2')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file2 = $safeName;

        }
        if($Commande->save() == true){
            $Commande = Commande::findorfail($Commande->id);
            $response = Mail::send('emails.commande',['commande' => $Commande], function ($m) use ($user){

                $m->from($user->email);

                $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

                $m->subject('New Order');

            });
            return redirect('/mycommandes')->with('success', 'Your order has been forwerded to the admin!');
        }else{
            return Redirect::back()->with('error','Something went wrong.');
        }

    }

    public function save_memory_report(Request $request){
        $user = Sentinel::getUser();
        $image = '';
        $Commande = new Commande();
        # # # Stripe Payment Charge
        if($request->has('stripeToken')){
            $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken,$request->get('product_cart_totlettc'));
            if(isset($stripeResult->id)){
                $Commande->payment_via = 'stripe';
                $Commande->charge_id = $stripeResult->id;
            }else{
                return Redirect::back()->with('error',$stripeResult);
            }
            
        }
        $Commande->type = 'memory';
        $Commande->user_id = $user->id;
        $Commande->name = $request->get('file_name');
        $Commande->desired_copies = $request->get('desired_copies');
        $Commande->maximum_deliver_copies = $request->get('product_quantity');
        $Commande->deliver_date = $request->get('livraison-date');
        $Commande->subtotal = $request->get('product_cart_totalht');
        $Commande->tax = $request->get('product_cart_tva');
        $Commande->total = $request->get('product_cart_totlettc');
        if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file = $safeName;

        }
        if ($file = $request->file('image2')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file2 = $safeName;

        }
        if($Commande->save() == true){
            $CommandeDetail = new CommandeDetail();
            $CommandeDetail->commande_id = $Commande->id;
            $CommandeDetail->paper_size = $request->get('paper_size');
            $CommandeDetail->smallest_size = $request->get('smallest');
            $CommandeDetail->largest_size = $request->get('largest');
            $CommandeDetail->orientation = $request->get('orientation');
            $CommandeDetail->cover_transparent = $request->get('transparent');
            $CommandeDetail->cover = $request->get('cover');
            $CommandeDetail->paper = $request->get('cover_paper');
            $CommandeDetail->black_and_white_pages = $request->get('black_and_white_pages');
            $CommandeDetail->color_pages = $request->get('color_pages');
            $CommandeDetail->no_of_pages = $request->get('paper_size');
            $CommandeDetail->weight = $request->get('weight');
            $CommandeDetail->print_size = $request->get('print_size');
            $CommandeDetail->back_print = $request->get('back_print');
            $CommandeDetail->back_color = $request->get('back_color');
            $CommandeDetail->clear_back = $request->get('clear_back');
            $CommandeDetail->binding_type = $request->get('binding_type');
            $CommandeDetail->comment = $request->get('comment');
            $CommandeDetail->save();
            $Commande = Commande::findorfail($Commande->id);
            $response = Mail::send('emails.commande',['commande' => $Commande], function ($m) use ($user){

                $m->from($user->email);

                $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

                $m->subject('New Order');

            });
            return redirect('/mycommandes')->with('success', 'Your order has been forwerded to the admin!');
        }else{
            return Redirect::back()->with('error','Something went wrong.');
        }

    }
    public function save_booklet(Request $request){
        $user = Sentinel::getUser();
        $image = '';
        $Commande = new Commande();
        # # # Stripe Payment Charge
        if($request->has('stripeToken')){
            $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken,$request->get('product_cart_totlettc'));
            if(isset($stripeResult->id)){
                $Commande->payment_via = 'stripe';
                $Commande->charge_id = $stripeResult->id;
            }else{
                return Redirect::back()->with('error',$stripeResult);
            }
            
        }
        $Commande->type = 'booklet';
        $Commande->user_id = $user->id;
        $Commande->name = $request->get('file_name');
        $Commande->file_format = $request->get('file_format');
        $Commande->print = $request->get('print');
        $Commande->desired_copies = $request->get('desired_copies');
        $Commande->maximum_deliver_copies = $request->get('product_quantity');
        $Commande->deliver_date = $request->get('livraison-date');
        $Commande->subtotal = $request->get('product_cart_totalht');
        $Commande->tax = $request->get('product_cart_tva');
        $Commande->total = $request->get('product_cart_totlettc');
        if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file = $safeName;

        }
        if ($file = $request->file('image2')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file2 = $safeName;

        }
        if($Commande->save() == true){
            $CommandeDetail = new CommandeDetail();
            $CommandeDetail->commande_id = $Commande->id;
            $CommandeDetail->orientation = $request->get('orientation');
            $CommandeDetail->cover_transparent = $request->get('cover_transparent');
            $CommandeDetail->cover = $request->get('cover');
            $CommandeDetail->paper = $request->get('paper');
            $CommandeDetail->no_of_pages = $request->get('no_of_pages');
            $CommandeDetail->weight = $request->get('weight');
            $CommandeDetail->comment = $request->get('comment');
            $CommandeDetail->save();
            $Commande = Commande::findorfail($Commande->id);
            $response = Mail::send('emails.commande',['commande' => $Commande], function ($m) use ($user){

                $m->from($user->email);

                $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

                $m->subject('New Order');

            });
            return redirect('/mycommandes')->with('success', 'Your order has been forwerded to the admin!');
        }else{
            return Redirect::back()->with('error','Something went wrong.');
        }

    }
    public function save_attach(Request $request){
        $user = Sentinel::getUser();
        $image = '';
        $Commande = new Commande();
        # # # Stripe Payment Charge
        if($request->has('stripeToken')){
            $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken,$request->get('product_cart_totlettc'));
            if(isset($stripeResult->id)){
                $Commande->payment_via = 'stripe';
                $Commande->charge_id = $stripeResult->id;
            }else{
                return Redirect::back()->with('error',$stripeResult);
            }
            
        }
        $Commande->type = 'attach';
        $Commande->user_id = $user->id;
        $Commande->file_format = $request->get('format');
        $Commande->desired_copies = $request->get('product_quantity');
        $Commande->maximum_deliver_copies = $request->get('product_quantity');
        $Commande->deliver_date = $request->get('livraison-date');
        $Commande->subtotal = $request->get('product_cart_totalht');
        $Commande->tax = $request->get('product_cart_tva');
        $Commande->total = $request->get('product_cart_totlettc');
        if ($file = $request->file('image')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file = $safeName;

        }
        if ($file = $request->file('image2')) {

            $fileName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension() ?: 'png';

            $folderName = '/uploads/files/';

            $destinationPath = public_path() . $folderName;

            $safeName = time().'_'.rand(0000,99999999) . '.' . $extension;

            $file->move($destinationPath, $safeName);

            $Commande->file2 = $safeName;

        }
        if($Commande->save() == true){
            $CommandeDetail = new CommandeDetail();
            $CommandeDetail->commande_id = $Commande->id;
            $CommandeDetail->paper_size = $request->get('paper_size');
            $CommandeDetail->smallest_size = $request->get('smallest');
            $CommandeDetail->largest_size = $request->get('largest');
            $CommandeDetail->paper = $request->get('paper');
            $CommandeDetail->weight = $request->get('paper');
            $CommandeDetail->color_pages = $request->get('color_pages');
            $CommandeDetail->save();
            $Commande = Commande::findorfail($Commande->id);
            $response = Mail::send('emails.commande',['commande' => $Commande], function ($m) use ($user){

                $m->from($user->email);

                $m->to('zeeshanzaheer574@gmail.com','Hello Admin');

                $m->subject('New Order');

            });
            return redirect('/mycommandes')->with('success', 'Your order has been forwerded to the admin!');
        }else{
            return Redirect::back()->with('error','Something went wrong.');
        }

    }
}
