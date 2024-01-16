<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class Registercontroller extends Controller
{
    public function registration_view() {
        return view("registration");
    }
    public function register_valid(Request $request) {
        $request->validate([
 "name" => "alpha_dash|required|regex:/[А-Яа-яЁё]/u",
 "surname" => "alpha_dash|required|",
 "patronymic" => "alpha_dash|required",
 "email" => "required|unique:users|email",
 "phone" => "required|numeric",
 "password" => "required|min:6",
        ], [

        ]);

        $user=$request->all();

        $userCreate = User::create([
            'name' => $user['name'],
            'surname' => $user['surname'],
            'patronymic' => $user['patronymic'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'login' => $user['login'],
            'password' => Hash::make( $user['password']),
            'role' => 1,
        ]);

        if ($userCreate) {
            // Auth::login($userCreate);
            return redirect("/")->with("success", "Вы зарегались!");
         } else {
            return redirect()->back()->with("error", "Ошибка регистрации!");
         }
    }
}
