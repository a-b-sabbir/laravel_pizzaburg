<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['name', 'email', 'profile_picture'];
}
