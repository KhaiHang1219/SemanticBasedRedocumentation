<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    protected $fillable = [
        'Class',
        'HasMethod'
    ];
    use HasFactory;
}
