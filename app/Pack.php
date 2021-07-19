<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = ['pack_name', 'img', 'description', 'price'];
}