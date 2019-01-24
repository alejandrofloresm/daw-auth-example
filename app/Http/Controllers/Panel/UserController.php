<?php
namespace App\Http\Controllers\Panel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use Hash;
use Auth;

use App\Models\User;

class UserController extends BaseController {

    public function register(Request $req) {
        return view('panel.user.register');
    }

    public function create(Request $req) {
        $userInput = $req->input('user');
        $userData = $userInput;
        $userData['password'] = Hash::make($userInput['password']);
        $user = User::create($userData);
        Auth::login($user);
        return redirect()
            ->route('panel.dashboard.index');
    }
}
