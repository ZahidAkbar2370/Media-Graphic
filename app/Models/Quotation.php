<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = ['type','first_name','last_name','email','phone','postal_code','city','description','image','status','quantity','Impression','shaping','finishing','catridge','comment','amount_include_tax','amount_exclude_tax'];
}
