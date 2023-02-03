<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    use HasFactory;
    protected $table = 'amount';
    protected $fillable = ['product_id','product_code','quantity','price'];
}
