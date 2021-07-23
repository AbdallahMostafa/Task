<?php

namespace App;

class Country 
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function validRegx(){
        return $rules = [
            'cameroon' => [
                'title' => 'Cameroon',
                'phone' => '/\(237\)\ ?[2368]\d{7,8}$/',
            ],
            'ethiopia' => [
                'title' => 'Ethiopia',
                'phone' => '/\(251\)\ ?[1-59]\d{8}$/',
            ],
            'morocco' => [
                'title' => 'Morocco',
                'phone' => '/\(212\)\ ?[5-9]\d{8}$/',
            ],
            'mozambique' => [
                'title' => 'Mozambique',
                'phone' => '/\(258\)\ ?[28]\d{7,8}$/',
            ],
            'uganda' => [
                'title' => 'Uganda',
                'phone' => '/\(256\)\ ?\d{9}$/',
            ],
        ];
    }

    public function getCountryCode($phone_number)
    {
        $country_code = substr($phone_number, 3,3);
        return $country_code;
    }

}
