<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table='campaigns';
   
    protected $fillable = [
       "title",
       "description",
       "image",
       "amount",
       "price"
    ];
}