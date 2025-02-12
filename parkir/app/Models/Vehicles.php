<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $primaryKey = 'vehicle_id';

    public $incrementing = false;
    public $timestamps = true;
}
