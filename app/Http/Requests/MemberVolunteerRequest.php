<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberVolunteerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:55',
            'last_name' => 'required|string|max:55',
            'middle_name' => 'max:55',
            'gender' => 'required|in:Male,Female',
            'age' => 'required|integer|between:15,30',
            'birthdate' => 'required|date',
            'city' => 'required|string|max:55',
            'barangay' => 'required|string|max:55',
            'street_address' => 'required|string|max:255',
            'email' => 'required|email|unique:member_volunteers,email',
            'contact_number' => 'required|string|max:11',
            'facebook_link' => 'required|string|max:255',
            'joined_as' => 'required|string|max:15',
            'reference_number' => 'required|string|max:55',
        ];
    }
}
