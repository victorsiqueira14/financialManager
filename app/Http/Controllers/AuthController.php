<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{

    public function user(Request $request)
    {
        $user = auth()->user();
        return response()->json([$user], 200);
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            abort(401, 'Invalid Credentials');
        }

        $token = auth()->user()->createToken('auth_token');

        return response()->json(['data' => [$token->plainTextToken]]);
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json($user, 201);
    }

    public function logout(Request $request )
    {
        // Auth::logout();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        // return response()->json([],200);

        auth()->user()->currentAccessToken()->delete();

        return response()->json([], 204);
    }
}
