<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   protected $fillable=['role'];
   public function users(){
      return $this->belongsToMany('App\User', 'user_roles', 'roleId', 'userId');
   }
}
