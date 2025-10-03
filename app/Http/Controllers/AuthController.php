<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dto\StoreUserDto;
use App\Http\Controllers\Controller;
use App\Service\UserService;

class AuthController extends Controller {
    public function store(Request $request) {
        $data = $request->all();
        $request->validate([
            'email' => 'required|email:rfc,dns'
        ]);
        $dto = new StoreUserDto();
        $dto->name = $data['name'];
        $dto->email = $data['email'];
        $dto->password = $data['password'];

        $user = UserService::store($dto);
        return response()->json($user, 201);
    }
}
