<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenGenerate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'member_id',
        'token_generated',
        
    ];
    protected $hidden = [
        
    ];
}
