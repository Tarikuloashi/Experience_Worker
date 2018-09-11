<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestService extends Model
{
  protected $fillable = [
      'title', 'userId', 'categoryId','serviceId', 'description',
  ];
}
