<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
   
    protected $fillable = [
      "title",
      "image",
      "description"
    ];
}
