<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DonorRequest;
use App\Http\Requests\MemberVolunteerRequest;
use App\Models\DonorRequest as ModelsDonorRequest;
use App\Models\RequestDonor;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(MemberVolunteerRequest $request)
    {

    }

    public function register_donor()
    {
        
    }

    public function request_donor(DonorRequest $request)
    {
        $data = $request->validated();

        RequestDonor::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'blood_type' => $data['blood_type'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'facebook_link' => $data['facebook_link'],
        ]);

        return response()->json([
            'message' => 'You have requested successfully. An email has been sent you.'
        ], 201);
    }
}
