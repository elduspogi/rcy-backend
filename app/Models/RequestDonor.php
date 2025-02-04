<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDonor extends Model
{
    use HasFactory;

    protected $table = 'donor_requests';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'blood_type',
        'email',
        'contact_number',
        'facebook_link',
    ];
}
