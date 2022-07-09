<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Redirect;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');
    }
    public function dashbord(){

        return view('admin.index');
    }
    public function traiter(){
    	$quotations = Quotation::where('status',0)->get();
        return view('admin.devis',compact('quotations'));
    }


}
