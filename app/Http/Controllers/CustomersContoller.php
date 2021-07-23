<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use App\Country;
use Illuminate\Support\Facades\Log;
use App\CountryCode;
use View;

class CustomersContoller extends Controller
{   
    private $country;
    public function __construct() {
        $this->country = new Country();
    }

    private function setCountryDetails($user , $rule, $state)
    {   
        $country_code = $this->country->getCountryCode($rule['phone']);
        $user->state = $state;
        $user->country_name = $rule['title'];
        $user->country_code = '+' . $country_code;

        return $user;
    }

    private function filterByState($users, $state_filter)
    {
        $filterd_users = array();

        foreach($users as $index => $user) 
        {
            if($state_filter == $user->state) {
                array_push($filterd_users, $user);
            }
        }
        return $filterd_users;
    }

    public function getUsersData(Request $request)
    {
        $all_data = array();
        $users = Customer::all();
        $rules = $this->country->validRegx();
        $filterd_users = array();
        foreach($users as $user) 
        {
            foreach($rules as $rule) 
            {
                if($request['country'] && $request['country'] != $rule['title']){
                    continue;
                }
                $value = preg_match($rule['phone'], $user->phone);
                if (!$value) {

                    $country_code = substr($user->phone, 1,3);
                    if($country_code == $this->country->getCountryCode($rule['phone']))
                    {
                       $user = $this->setCountryDetails($user ,$rule, "NOK");
                       array_push($filterd_users, $user);
                    }
                    continue;
                }else {
                    $user = $this->setCountryDetails($user ,$rule, "OK");
                    array_push($filterd_users, $user);
                }
            }
        }
        if($request['state']) {
            $filterd_users = $this->filterByState($filterd_users, $request['state']);
        }
        $all_data['users'] = $filterd_users;
        return response()->json($all_data);
    }

    public function getCountryCodes()
    {
        return response()->json(CountryCode::all());
    }
}
