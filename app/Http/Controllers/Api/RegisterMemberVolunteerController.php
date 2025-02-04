<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberVolunteerRequest;
use App\Models\MemberVolunteer;
use Illuminate\Http\Request;

class RegisterMemberVolunteerController extends Controller
{
    public function register(MemberVolunteerRequest $request)
    {
        $data = $request->validated();

        /** @var \App\Models\MemberVolunteer $user */
        $user = MemberVolunteer::create([
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

        return response()->json([
            'message' => 'Request successful. An email has been sent to you.'
        ], 201);
    }
}
