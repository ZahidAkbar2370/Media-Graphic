<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['type','user_id','file','file2','name','file_format','print','works_type','paper','shaping','desired_copies','maximum_deliver_copies','deliver_date','subtotal','tax','total','payment_via','charge_id','status'];

    public function detail()
    {

        return $this->hasOne(CommandeDetail::class);

    }

    public function User()
    {

        return $this->belongsTo(User::class,'user_id','id');

    }
}
