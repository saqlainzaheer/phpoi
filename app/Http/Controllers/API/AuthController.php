<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json([
                'user' => $user,
                'authorization' => [
                    'token' => $user->createToken('ApiToken')->plainTextToken,
                    'type' => 'bearer',
                ]
            ]);
        }

        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
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

    public function createProfile(Request $req)
    {
        $user = $req->user();
        $data = [
            'user_id' => $user->id,
        ];
        // Add optional parameters if they are provided in the request
        if ($req->filled('personal_details')) {
            $data['personal_details'] = $req->input('personal_details');
        }

        if ($req->filled('bank_details')) {
            $data['bank_details'] = $req->input('bank_details');
        }

        if ($req->filled('aadhar')) {
            $data['aadhar'] = $req->input('aadhar');
        }

        if ($req->filled('pan_card')) {
            $data['pan_card'] = $req->input('pan_card');
        }

        // if ($req->hasFile('aadhar')) {
        //     $disk = Storage::build([
        //         'driver' => 'local',
        //         'root' => '/',
        //     ]);
        //     $aadhar = $req->file('aadhar');
        //     $aadharPath = $disk->put('uploads', $aadhar);
        //     $data['aadhar'] = $aadharPath;
        // }

        // if ($req->hasFile('pan_card')) {
        //     $disk = Storage::build([
        //         'driver' => 'local',
        //         'root' => '/',
        //     ]);
        //     $panCard = $req->file('pan_card');
        //     $panCardPath = $disk->put('uploads', $panCard);
        //     $data['pan_card'] = $panCardPath;
        // }
        // Check if a UserProfile already exists for the user
        if ($user->userProfile) {
            $userProfile = $user->userProfile->update($data);
        } else {
            $userProfile = UserProfile::create($data);
        }
        return response()->json([
            'message' => 'User Profile request created successfully.',
            'data' => $userProfile,
        ], 201);
    }

    public function getProfile()
    {
        // $start = microtime(true);
        // auth()->user()->id;
        // $end = microtime(true);
        // return ['Data'=>"backend loading time in " . round($end - $start, 4) . " seconds."];
        $userId = auth()->user()->id;
        $user = User::with('userProfile')->find($userId);
        return  response()->json([
            'message' => 'Data retrieved successfully',
            'data' => $user,
        ], 200);
    }
}
