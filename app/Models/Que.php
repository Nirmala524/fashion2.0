<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Que extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'desc', 'status'];
}
