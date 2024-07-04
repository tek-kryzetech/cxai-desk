<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterArea extends Model
{
    use HasFactory;
    protected $fillable=[
        'number',
        'description'
    ];
}
