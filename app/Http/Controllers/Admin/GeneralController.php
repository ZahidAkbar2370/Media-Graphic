<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function adminFactures(){
        $quotations = Quotation::where('status','<',3)->get();
        return view('admin.factures.index',compact('quotations'));
    }

    public function adminStatistiques(){
        $quotations = Quotation::where('status','<',3)->get();
        return view('admin.statistiques.index',compact('quotations'));
    }

    public function adminAvoris(){
        $quotations = Quotation::where('status','<',3)->get();
        return view('admin.avoris.index',compact('quotations'));
    }
}
