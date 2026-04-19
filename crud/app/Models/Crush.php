<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crush extends Model
{
    protected $fillable = ['name', 'reason', 'status', 'crush_level'];
}
