<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    protected $fillable = [
        'Class',
        'Function',
        'HasDependencies'
    ];
    use HasFactory;
}
