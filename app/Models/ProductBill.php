<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBill extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMny(product::class);
    }
    public function bill(){
        return $this->hasMny(bill::class);
    }

}
