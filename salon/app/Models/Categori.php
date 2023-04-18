<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Categori extends Model
{
    use HasFactory;
    // use SoftDeletes;
    // protected $table = "categori";
    // protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function sales() 
    {
        return $this->hasOne('App\Models\Sale', 'categori_id');
    }
}
