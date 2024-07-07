<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "orders";
    protected $guarded = false;

    
    public function loyalty(){
        return $this->belongsTo(Loyalty::class, 'lotalty_id', 'id');
    }

}
