<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trends extends Model
{
    protected $fillable = ['name', 'image', 'date', 'status'];
}
