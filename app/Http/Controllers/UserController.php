<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UserService;

class UserController extends Controller {

    public $userService;

    function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    public function show(string $id) {
        $user = $this->userService->show($id);
        return response()->json([
            'user' => $user
        ], 200);
    }

    public function destroy(string $id) {
        $this->userService->destroy($id);
        return response()->json([], 204);
    }
    public function update(Request $request, string $id) {
        throw new \Exception('Metodo update não implementado');
    }
    public function index() {
        $users = $this->userService->index();
        return ['users' => $users];
    }
}
