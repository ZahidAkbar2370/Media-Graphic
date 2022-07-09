<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = ['user_id','quotation_id','description','image','amount_include_tax','amount_exclude_tax'.'payment_via','charge_id','status'];

     public function User()

    {

        return $this->belongsTo(User::class,'user_id','id');

    }
}
