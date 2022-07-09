<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSetting extends Model
{
    use HasFactory;

    protected $table = "products_setting";

    protected $fillable = ['type','quantity','first_day_price','second_day_price','third_day_price','fourth_day_price','status'];

    protected $hidden = ['created_at','updated_at'];

    public static $types = [
        1 => 'PLAN',
        2 => 'MÉMOIRE & RAPPORT',
        3 => 'BROCHURE & LIVRET',
        4 => 'AFFICHE',
        5 => 'DOSSIER DE PLANS',
    ];
}
