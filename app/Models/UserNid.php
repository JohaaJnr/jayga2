<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNid extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_nid_filename',
        'user_nid_targetlocation',
    ];
}
