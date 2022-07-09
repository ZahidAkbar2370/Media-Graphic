<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel as FacadesSentinel;
use PDF;
use Sentinel;

class CompactibleController extends Controller
{
    public function clients(){

        $results = User::join('role_users as r','r.user_id','=','users.id')
                        ->select('users.*','r.role_id')->get();
        return view('admin.compatible.clients', compact('results'));
    }

public function generate_pdf($id)
{
    $get_payment=User::find($id);
    $Pdf = PDF::loadView('admin/compatible.myPDF',compact('get_payment') );
    return $Pdf->download('payment.pdf');
}

public function details($id){

    $user=User::join('role_users as r','r.user_id','=','users.id')
    ->select('users.*','r.role_id')->where('users.id',$id)->first();
    return view('admin.compatible.compte-client',compact('user'));
}

public function update(Request $request, $id)
{

    // return  $request->all();
    $user = User::find($id);
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->phone = $request->input('phone');
    $user->billing_address = $request->input('billing_address');
    $user->shipping_address = $request->input('shipping_address');

    $user->update();
    return redirect()->back()->with('status','Student Updated Successfully');
}

public function compte_client_commandes_details($id){


    $order_details=User::join('role_users as r','r.user_id','=','users.id')
    ->select('users.*','r.role_id')->where('users.id',$id)->first();

    return view('admin.compatible.compte-client-commandes',compact('order_details'));
}

}
