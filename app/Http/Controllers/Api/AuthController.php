<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(RegisterRequest $request)
    {
        try {
            $validatedData = $request->validated();

            // Encrypt the password
            $validatedData['password'] = bcrypt($validatedData['password']);

            // Create a new user
            $user = User::create($validatedData);

            // Generate a new access token for the user
            $accessToken = $user->createToken('authToken')->plainTextToken;

            // Return success response with access token
            return response()->json([
                'message' => 'User registered successfully',
                'access_token' => $accessToken,
            ], 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = auth()->user();
        $accessToken = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'message' => 'Successfully logged in',
            'user' => $user,
            'access_token' => $accessToken,
        ], 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
