<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UserService;
use App\Models\User;
use App\Dto\StoreUserDto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class AuthViewController extends Controller
{
    protected $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = User::all();
        Log::debug('Usuários encontrados: ' . json_encode($users));
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => ['required'],
            "password" => ['required']
        ]);
        $users = User::all();
        Log::debug('Usuários encontrados: ' . json_encode($users));
        Log::debug('Email digitado: "|' . $credentials['email'] . '|"');
        $user = User::where("email", trim($credentials['email']))->first();
        Log::debug('Usuário encontrado: ' . json_encode($user));      
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/users');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }
    
    public function registerPost(Request $request)
    {
        
        Log::debug('criando usuário');
        try {
            $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
            ]);

            $dto = new StoreUserDto();
            $dto->name = $request->name;
            $dto->email = $request->email;
            $dto->password = $request->password;

            UserService::store($dto);
            return redirect()->intended('/login')->with('success', 'Registro realizado com sucesso! Faça login agora.');
            
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Erro ao registrar usuário: ' . $e->getMessage(),
            ]);
        }
       
    }
    
}