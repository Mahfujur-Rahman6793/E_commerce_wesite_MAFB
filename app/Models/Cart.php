<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['email',	'product_id','product_code',	'size',	'quantity'	];

    public function Product(){
        
            return $this->belongsTo(Product::class,'product_code','product_code');
        
    }

    public function ProductbyId(){
        
        return $this->belongsTo(Product::class,'product_id','id');
    
}
public function user(){
        
    return $this->belongsTo(Mafb::class,'email','email');

}

public function delivery(){
        
    return $this->belongsTo(Mafb::class,'delivered_by','email');

}
}
