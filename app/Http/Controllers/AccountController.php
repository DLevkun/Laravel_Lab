<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;
use App\Models\Role;

class AccountController extends Controller{
    public function submit(Request $req){
        $validation = $req->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => array('regex:/(^(\+380|0)\d{9}$)/u'),
            'password' => 'required|min:6|max:20'
        ]);

        $user = new UserAccount();
        $user->name = $req->input('name');
        $user->surname = $req->input('surname');
        $user->email = $req->input('email');
        $user->phone = $req->input('phone');
        $user->password = $req->input('password');

        $user->save();

        $user->roles()->attach([4]);

        $user->roles()->syncWithoutDetaching([rand(1,3), rand(1,3)]);

        return redirect()->route('main-page')->with('success', "Ви успішно зареєструвались");
    }

    public function showAllUsers(){
        $users = new UserAccount;
        $roles = Role::all();
        return view('main', ['data' => $users->all(), 'roles' => $roles]);
    }

    public function getRoles(){
        $roles = Role::all();
        return view('account', ['roles' => $roles]);
    }

}
