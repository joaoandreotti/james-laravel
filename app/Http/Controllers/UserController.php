<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController
{
    public function getUserJameses(Request $request) {
        $email = $request->query('email');
        $user = User::where('email', $email)->first();
        return view('user', compact('user'));
    }
}
