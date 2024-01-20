<?php

namespace App\Models;

use App\Http\Controllers\MallsController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Histories extends Model
{

    use HasFactory;
    protected $table = 'histories';
    protected $primaryKey = 'histories_id';
    protected $fillable = ['histories_id', 'vehicle_id', 'mall_id', 'entry_time', 'exit_time', 'duration', 'total_payment', 'created_at', 'updated_at'];

    public $incrementing = false;
    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class, 'vehicle_id');
    }

    public function malls()
    {
        return $this->belongsTo(Malls::class, 'mall_id');
    }
}
