<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'day_status'
    ];
}

