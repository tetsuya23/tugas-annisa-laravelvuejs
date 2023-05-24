<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $fillable =['name', 'gender', 'email', 'phone_number', 'address'];
    
    public function sales() 
    {
        return $this->hasMany('App\Models\Sale', 'petugas_id');
    }
}
