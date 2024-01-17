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
 "login" =>"required|unique:users|login",
 "phone" => "required|numeric",
 "password" => "required|min:6",
        ], [
            "email.required" => "Поле обязательно для заполнения!",
            "email.email" => "Введите корректный email",
            "email.unique" => "Данный email уже занят",
            "name.required" => "Поле обязательно для заполнения!",
            "name.alpha_dash" => "Имя должно состоять только из букв!",
            "name.regex" => "Только кириллица",
            "surname.required" => "Поле обязательно для заполнения!",
            "surname.alpha_dash" => "Фамилия должно состоять только из букв!",
            "patronymic.required" => "Поле обязательно для заполнения!",
            "patronymic.alpha_dash" => "Отчество должно состоять только из букв!",
            "login.required" => "Поле обязательно для заполнения!",
            "phone.required" => "Поле обязательно для заполнения!",
            "phone.numeric" => "Номер только из цифр!",
            "password.required" => "Поле обязательно для заполнения!",
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
