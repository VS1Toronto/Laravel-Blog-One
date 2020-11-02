<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHasRole extends Model
{
    protected $fillable = [
      'role_id',
      'user_id'
    ];
}
