<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMesssage extends Model
{
    use HasFactory;

    protected  $fillable = ['type', 'name', 'phone'];
}
