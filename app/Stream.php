<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $table = 'stream';
    protected $fillable = ['stream_name'];
}
