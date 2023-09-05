<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory , Notifiable;
    protected $guarded = [];
    public function provider(){
        return $this->belongsToMany(provider::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }


    public function sale(){
        return $this->belongsToMany(sale::class);
    }
    public function customer(){
        return $this->hasMany(customer::class);
    }
    public function label(){
        return $this->belongsToMany(label::class);
    }
    public function report(){
        return $this->hasMany(report::class);
    }
    public function argence(){
        return $this->belongsToMany(argence::class);
    }
}
