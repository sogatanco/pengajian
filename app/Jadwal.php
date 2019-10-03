<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable=['title', 'oleh', 'description', 'lat', 'long', 'tempat', 'start', 'end'];
}
