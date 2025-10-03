<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UserService;
use App\Dto\StoreUserDto;
use App\Dto\UserUpdateDto;
use Illuminate\Support\Facades\Hash;

class UserViewController extends Controller
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->index();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->userService->show($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        $dto = new StoreUserDto();
        $dto->name = $request->name;
        $dto->email = $request->email;
        $dto->password = Hash::make($request->password);

        UserService::store($dto);
        
        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function edit($id)
    {
        $user = $this->userService->show($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $id
        ]);

        // Como o update não está implementado, vamos fazer uma implementação básica
        $user = \App\Models\User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        
        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);
        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
    }
}