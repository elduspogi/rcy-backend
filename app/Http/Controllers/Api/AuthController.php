<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\MemberVolunteerRequest;
use App\Models\MemberVolunteer;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!FacadesAuth::attempt($credentials)) {
            return response([
                'message' => 'Provided username or password is incorrect.',
            ], 422);
        }

        /** @var \App\Models\User $user */
        $user = FacadesAuth::user();
        $token = $user->createToken('main')->plainTextToken;
        return response(compact('user', 'token'));
    }

    public function store_member_volunteer(MemberVolunteerRequest $request)
    {
        $data = $request->validated();

        $membervolunteer = MemberVolunteer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'birthdate' => $data['birthdate'],
            'city' => $data['city'],
            'barangay' => $data['barangay'],
            'street_address' => $data['street_address'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'facebook_link' => $data['facebook_link'],
            'joined_as' => $data['joined_as'],
            'reference_number' => $data['reference_number'],
        ]);


    }

    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return response('', 204);
    }
}
