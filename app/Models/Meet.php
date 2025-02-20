<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstImg',
        'midlleImg',
        'lastImg',
        'desc',
        'schultz',
        'design',
        'our',
        'team',
        'partner',
        'client'
    ];
}
