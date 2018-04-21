<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCollage extends Model
{
    protected $table = 'user_collage';
    protected $fillable = ['id', 'user_id', 'collage_id'];

    public $timestamps = false;
}
