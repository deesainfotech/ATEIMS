<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [

        'institution_code',

        'institution_name',

        'institution_type',

        'affiliation',

        'address',

        'city',

        'state',

        'country',

        'postal_code',

        'phone',

        'email',

        'website',

        'principal_name',

        'established_year',

        'logo',

        'status'

    ];
}