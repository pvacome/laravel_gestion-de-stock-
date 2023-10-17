<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produit(){
        return $this->belongsTo(product::class,'product');
    }
    public function client(){
     return $this->belongsTo(customer::class,'customer');
    }
}
