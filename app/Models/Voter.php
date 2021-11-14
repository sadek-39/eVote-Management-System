<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'sl_no',
        'voter_id',
        'img',
        'voter_name',
        'address',
        'phone',
        'email',
        'delete_status'
    ];
}
