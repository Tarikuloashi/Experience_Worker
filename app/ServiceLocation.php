<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceLocation extends Model
{
  protected $fillable = [
      'lng', 'lat',
  ];
}
