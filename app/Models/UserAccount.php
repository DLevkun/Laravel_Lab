<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class UserAccount extends Model
{
    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user_account', 'user_account_id', 'role_id');
    }
}
