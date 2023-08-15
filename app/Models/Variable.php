<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $fillable = [
        'Class',
        'HasVariable'
    ];
    use HasFactory;
}
