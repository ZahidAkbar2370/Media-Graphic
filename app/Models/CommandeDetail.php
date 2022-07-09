<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeDetail extends Model
{
    use HasFactory;

    protected $table = "commande_detail";

    protected $fillable = ['commande_id','paper_size','smallest_size','largest_size','orientation','cover_transparent','cover','paper','black_and_white_pages','color_pages','no_of_pages','weight','print_size','back_print','back_color','clear_back','binding_type','comment'];

    protected $casts = ['binding_type' => 'array'];

    public function commande()
    {

        return $this->belongsTo(Commande::class,'commande_id','id');

    }
}
