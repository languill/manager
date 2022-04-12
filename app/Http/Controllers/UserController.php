<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ];

        $messages = [
            'name.required' => 'Укажите ваше имя',
            'email.required' => 'Укажите вашу @-почту',
            'email.email' => 'Необходимо указать почту. Например, example@mail.ru',
            'email.unique' => 'Данный адрес занят. Укажите другой',
            'password.required' => 'Укажите пароль',
            'password.confirmed' => 'Пароли должны совпадать'
        ];

        $validator = Validator::make($request->all(), $rules, $messages) ->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        session()->flash('success', 'Успешная регистрация. Теперь вы можете зайти в систему');

        return redirect('/login');
    }

    public function loginForm() {
        return view('user.login');
    }

    public function login(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'email.required' => 'Укажите вашу @-почту',
            'email.email' => 'Необходимо указать почту. Например, example@mail.ru',
            'password.required' => 'Укажите пароль',
        ];

        $validator = Validator::make($request->all(), $rules, $messages) ->validate();

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
