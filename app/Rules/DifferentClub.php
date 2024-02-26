<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DifferentClub implements Rule
{
    protected $otherClub;

    public function __construct($otherClub)
    {
        $this->otherClub = $otherClub;
    }

    public function passes($attribute, $value)
    {
        // Lakukan pengecekan apakah club yang baru tidak sama dengan club yang lain
        return $value != $this->otherClub;
    }

    public function message()
    {
        return 'Klub harus berbeda.';
    }
}
