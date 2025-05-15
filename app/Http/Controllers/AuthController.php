<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register (Request $request) // request significa tudo que o usuário envia
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]); // isso siginifica que o usuário precisará enviar name, email e password com as validações que estão ai

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); // após o envio dos dados pelo o usuário o sistema pega os valores e cria o usuário

        Auth::login($user); // depois de criar o usuário o laravel faz o login automatico dele.

        return response()->json(['message' => 'User registered succesully!'], 201); // retorna um json para o front end que foi registrado com sucesso.
    }

    public function login (Request $request)
    {
        $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string|min:8',
        ]); // usuário envia email e password

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' =>'Login successful!'], 200);
        } // se conseguir logar com o email e senha passado pelo usuário retorna uma mensagem para o front end com codigo 200 onde ele consegue acessar.

        return response()->json(['message' => 'Invalid credentials'], 401);
        // caso nao consiga acessar ele retorna credenciais invalidas sendo erro 401 por ser um erro do usuário
    }

    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Logout successful!'], 200);
    }
    
}
