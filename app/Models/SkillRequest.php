<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillRequest extends Model
{
    use HasFactory;

    protected $table = 'skill_request';
    protected $fillable = [
        'request_id',
        'skill_id'
    ];
}
