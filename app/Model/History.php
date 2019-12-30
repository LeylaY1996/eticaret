<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table='histories';
   
    protected $fillable = [
       "title",
       "slug",
       "image",
       "description"
    ];
}
