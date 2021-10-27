<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'token',
        'status'
        
    ];
    protected $hidden = [
        
    ];
}
