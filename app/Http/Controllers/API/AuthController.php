<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'empid' => 'required|string|max:10|min:6',
            'password' => 'required|string',
        ]);
        $credentials =['empid' => $request->empid, 'password'=> $request->password ];
        $token = Auth::attempt($credentials);
        
        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'lastname' => 'required|string|max:30',
            'firstname' => 'required|string|max:30',
            'middlename' => 'required|string|max:30',
            'password' => 'required|string|min:6',
            'status' => 'required|string|max:10',
            'datehired' => 'required|date',
            'salary' => 'required',
            'notes' => 'required|string|max:255',
            'remark' => 'required|string|max:255',

        ]);

        $user = User::create([
            'empid' => Str::random(10),
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'datehired' => $request->datehired,
            'salary' => $request->salary,
            'notes' => $request->notes,
            'remark' => $request->remark,
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
