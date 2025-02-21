<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\TwilioService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    // Register with phone
    public function registerWithPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:10|unique:users,phone',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $otp = rand(1000, 9999);
        session(['otp' => $otp, 'phone' => $request->phone]);

        // Send OTP to phone
        $this->twilioService->sendSms($request->phone, "Your OTP is: $otp");

        return response()->json(['message' => 'OTP sent to your phone.']);
    }

    // Login with phone
    public function loginWithPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:10',
            'otp' => 'required|numeric|digits:4',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->otp == session('otp') && $request->phone == session('phone')) {
            // You can authenticate the user here, or create a new user
            $user = User::firstOrCreate(
                ['phone' => $request->phone],
                ['name' => 'New User', 'password' => Hash::make(Str::random(8))]
            );

            // Authentication logic or token generation can go here
            return response()->json(['message' => 'Logged in successfully']);
        }

        return response()->json(['message' => 'Invalid OTP'], 400);
    }

    // Password Reset with phone
    public function resetPasswordWithPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Generate OTP for password reset
        $otp = rand(1000, 9999);
        session(['otp' => $otp, 'phone' => $request->phone]);

        // Send OTP to phone for resetting password
        $this->twilioService->sendSms($request->phone, "Your OTP for password reset is: $otp");

        return response()->json(['message' => 'OTP sent for password reset']);
    }
}
