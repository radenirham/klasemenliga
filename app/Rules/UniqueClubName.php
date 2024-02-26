<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Club;

class UniqueClubName implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return !Club::where('nama', $value)->exists();
    }

    public function message()
    {
        return 'Nama klub sudah digunakan.';
    }
}