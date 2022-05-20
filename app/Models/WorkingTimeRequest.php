<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingTimeRequest extends Model
{
    use HasFactory;

    protected $table = 'working_time_request';
    protected $fillable = [
        'request_id',
        'working_hour',
        'weekday'
    ];
}
