<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodstaff extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsToMany(Foodstaff::class,'order_foodstaff','foodstaff_id', 'order_id');
    }

    
}
