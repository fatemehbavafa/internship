<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceRequest extends Model
{
    use HasFactory;

    protected $table = 'province_request';
    protected $fillable = [
        'request_id',
        'province_id'
    ];
}
