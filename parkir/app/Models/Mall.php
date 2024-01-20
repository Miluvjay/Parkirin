<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
    use HasFactory;

    protected $table = 'mall';
    protected $primaryKey = 'notiket';

    public $incrementing = false;
}
    // class Mall extends Model
    // {
    //     use HasFactory;

    //     protected $table = 'mall';
    //     protected $primaryKey = 'id_mall';
    //     public $incrementing = false;

    //     // Define the inverse relationship with the Malls model
    //     public function malls()
    //     {
    //         return $this->belongsTo(Malls::class, 'mall_id', 'id_mall');
    //     }
    // }
