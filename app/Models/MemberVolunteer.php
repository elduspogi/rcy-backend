<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberVolunteer extends Model
{
    use HasFactory;

    protected $table = 'member_volunteers';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'age',
        'birthdate',
        'city',
        'barangay',
        'street_address',
        'email',
        'contact_number',
        'facebook_link',
        'joined_as',
        'reference_number',
    ];

    protected $casts = [
        'birthdate' => 'datetime',
        'age' => 'integer',
    ];
}
