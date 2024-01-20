<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malls extends Model
{
    use HasFactory;

    protected $table = 'malls';
    protected $primaryKey = 'mall_id';
    protected $fillable = ['mall_id', 'id_mall', 'mall_name', 'city', 'address', 'help_desk', 'quotas_motor', 'quotas_mobil', 'fee_motor', 'fee_mobil', 'created_at', 'updated_at'];
    public $incrementing = false;
    public function mall()
    {
        return $this->belongsTo(Mall::class, 'id_mall');
    }
} 

// class Malls extends Model
// {
//     use HasFactory;

//     protected $table = 'malls';
//     protected $primaryKey = 'mall_id';
//     public $incrementing = false;

//     // Define the relationship with the Mall model
//     public function mall()
//     {
//         return $this->hasOne(Mall::class, 'id_mall', 'mall_id');
//     }
// }