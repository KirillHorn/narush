<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index() {
        return view("index");
    }
    public function personalcab() {
        return view("personalcab");
    }

    public function auth_valid(Request $request)
    {
        $request->validate([
            "login" => "required",
            "password" => "required",
         ], [
            "login.required" => "Поле обязательно для заполнения!",
            "password.required" => "Поле обязательно для заполнения!",
   
         ]);

         
      $user_auth = $request->only("login", "password");
      if (
        Auth::attempt([
           "login" => $user_auth['login'],
           "password" => $user_auth['password']
        ])
     ) {
      if (Auth::user()->id_role == 1) {
        return redirect("/personalcab")->with("auth", "Вы вошли!");
     } else {
        return redirect("/admin/index")->with("auth", "Вы вошли!");

     } 
     } else {
      return redirect()->back()->with("error", "Ошибка авторизации! Проверьте логин или пароль!");
     }
    }
    public function signout()
    { //выход из аутентификация
       Session::flush();
       Auth::logout();
       return redirect("/");
    }
}
