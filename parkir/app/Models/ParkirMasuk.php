<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkirMasuk extends Model
{
    use HasFactory;

    protected $table = 'parkirmasuk';
    protected $primaryKey = 'notiket';

    public $incrementing = false;
}
