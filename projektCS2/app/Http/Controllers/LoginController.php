<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getInfo($usernameAndEmail){
        return User::where('username', '=', $usernameAndEmail)->orWhere('email', '=', $usernameAndEmail)->first();
    }
    public function generateView(){
        return view('login');
    }

    public function validate(Request $request)
    {
        // Валидация данных формы
        return $request->validate([
            'usernameAndEmail' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function process(Request $request)
    {
        $valid = $this->validate($request);
        $usernameAndEmail = $request->input('usernameAndEmail');
        $user = $this->getInfo($usernameAndEmail);
        $password = $request->input('password');
        if ($user === null) {
            return redirect()->route('login')->withErrors(['error' => 'Nieprawidłowa nazwa użytkownika lub hasło.']);
        }
        if(($usernameAndEmail == $user->username|| $usernameAndEmail == $user->email) && $password == $user->password){
            Auth::login($user);
            return redirect()->route('case_content');
        }
        else return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
