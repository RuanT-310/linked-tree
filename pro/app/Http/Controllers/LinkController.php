<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service\LinkService;

class LinkController extends Controller {

    public function index() {

        $link = LinkService::show();
        return response()->json([
            'message' => $link
        ], 200);
    }
}
