<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    protected $table='visitors';
    protected $guarded=[];

    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
