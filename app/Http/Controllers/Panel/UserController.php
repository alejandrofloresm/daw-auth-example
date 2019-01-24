<?php
namespace App\Http\Controllers\Panel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController {
    public function register(Request $request) {
        return view('panel.user.register');
    }
}
