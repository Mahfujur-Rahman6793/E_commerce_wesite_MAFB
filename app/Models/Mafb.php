<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mafb extends Model
{
    use HasFactory;
    protected $table  = 'mafb';
    protected $fillable = ['fname',	'lname',	'email',	'email_verified_at',	'password',	'city',	'state',	'zip','role',	'remember_token'];

    public function Cart(){
        return $this->hasMany(Cart::class, 'email','email'); 
    }

   

}
