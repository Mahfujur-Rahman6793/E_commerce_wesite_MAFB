<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['product_code',	'category',	'product',	'desc',	'image'];

    public function Amount(){
        return $this->hasOne(Amount::class, 'product_id','id');
    }
    public function Category(){
        return $this->belongsTo(Category::class,'category', 'id');
    }

    public function Cart(){
        return $this->hasMany(Cart::class, 'product_id','id');
    }
    
}
