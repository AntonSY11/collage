<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    protected $table = 'collage';
    protected $fillabel = ['id', 'name', 'path', 'count_field'];
}
