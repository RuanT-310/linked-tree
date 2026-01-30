<?php
namespace App\Service;

use App\Dto\StoreUserDto;
use App\Dto\UserUpdateDto;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class UserService {
    public function show(string $id) {
        $user = User::find($id);
        if ($user == null) {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }
        return $user;
    }

    public static function store(StoreUserDto $data) {

        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password),
        ]);
        Log::debug('Usuário criado?', ['id' => $user->id]); // Veja se o ID aparece no log
        return $user;
    }

    public function destroy(string $id) {
        $user = User::find($id);
        if ($user == null) {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }
        $user->delete();
    }
    public function update(UserUpdateDto $request, string $id) {
        throw new \Exception('Metodo update não implementado');
    }
    public function index() {
        $users = User::all();
        return $users;
    }
}