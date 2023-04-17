<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function categori() 
    {
        return $this->belongsTo('App\Models\Petugas', 'petugas_id');
        //return $this->belongsTo('App\Models\Categori', 'categori_id');
      
    }
}
