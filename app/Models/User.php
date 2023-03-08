<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guarded = [];
    // protected $filleble = ['gambar','logo'];
    public function jabatans(){
        return $this -> belongsTo(addres::class, 'provinsi','id');
        return $this -> belongsTo(addres::class, 'kabupaten','id');
        return $this -> belongsTo(addres::class, 'kecamatan','id');
        
    }

}