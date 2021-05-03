<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserAccount;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany(UserAccount::class, 'role_user_account', 'role_id', 'user_account_id');
    }
}
