<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staff';
    protected $guarded= [];


    public function visitor(){
        return $this->belongsTo(Visitors::class);
    }


}
