<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $fillable = ['email',	'order_id',	'is_done'	];

    public function Order(){
        return $this->hasMany(Order::class, 'order_id','id');
    }

    public function Cart(){
        return $this->hasOne(Cart::class, 'id','order_id');
    }
}
