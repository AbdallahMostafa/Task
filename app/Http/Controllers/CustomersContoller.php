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

    public function __construct() {
        
    }

    public function getAll(Request $request)
    {
        $all_data = array();
        $country = new Country();
        $users = Customer::all();
        $rules = $country->validRegx();
        $country_codes = CountryCode::all();
        
        foreach($users as $user) 
        {
            foreach($rules as $rule) 
            {
                $value = preg_match_all($rule['phone'], $user->phone, $matches, PREG_OFFSET_CAPTURE);
                if (!$value) {
                    $cc = substr($user->phone, 1,3);
                    if($cc == $country->getCountryCode($rule['phone']))
                    {
                        $country_code = $country->getCountryCode($rule['phone']);
                        $user->state = "NOK";
                        $user->country_name = $rule['title'];
                        $user->country_code = '+' . $country_code;
                    }
                    continue;
                }else {
                    $country_code = $country->getCountryCode($rule['phone']);
                    $user->state = "OK";
                    $user->country_name = $rule['title'];
                    $user->country_code = '+' . $country_code;
                }
            }
        }
        $all_data['users'] = $users;
        $all_data['country_codes'] = $country_codes;
        return response()->json($all_data);
    }


    public function getFilteredCountries($country_filter)
    {
        Log::info("hello");
        $users = Customer::all();
        $country = new Country();
        $rules = $country->validRegx();
        $filterd_users = array();
        $country_codes = CountryCode::all();
        if ($country_filter) {
            foreach($users as $user) 
            {
                foreach($rules as $rule)
                {
                    if($rule['title'] == $country_filter) 
                    {
                        $value = preg_match_all($rule['phone'], $user->phone, $matches , PREG_OFFSET_CAPTURE);
                        if (!$value) {
                            $cc = substr($user->phone, 1,3);
                            if($cc == $country->getCountryCode($rule['phone']))
                            {
                                $country_code = $country->getCountryCode($rule['phone']);
                                $user->state = "NOK";
                                $user->country_name = $rule['title'];
                                $user->country_code = '+' . $country_code;
                                array_push($filterd_users, $user);
                            }
                            continue;
                        } else {
                            $country_code = $country->getCountryCode($rule['phone']);
                            $user->state = "OK";
                            $user->country_name = $rule['title'];
                            $user->country_code = '+' . $country_code;
                            if ( $user->country_name == $country_filter )
                                array_push($filterd_users, $user);
                        }
                    }
                }
            }
            $all_data['users'] = $filterd_users;
            $all_data['country_codes'] = $country_codes;
            return response()->json($all_data);
        }
    }


    public function getSateFilter($state_filter)
    {
        $users = Customer::all();
        $country = new Country();
        $rules = $country->validRegx();
        $filterd_users = array();
        $country_codes = CountryCode::all();
        if ($country_filter || $state_filter) {
            foreach($users as $user) 
            {
                foreach($rules as $rule)
                {
                    if($state_filter == "OK") {
                        $value = preg_match_all($rule['phone'], $user->phone, $matches , PREG_OFFSET_CAPTURE);
                        if (!$value) {
                            continue;
                        } else {
                            $country_code = $country->getCountryCode($rule['phone']);
                            $user->state = "OK";
                            $user->country_name = $rule['title'];
                            $user->country_code = '+' . $country_code;
                            array_push($filterd_users, $user);
                        }
                    } else if ($state_filter == "NOK") {
                        $value = preg_match_all($rule['phone'], $user->phone, $matches , PREG_OFFSET_CAPTURE);
                        if (!$value) {
                            $cc = substr($user->phone, 1,3);
                            if($cc == $country->getCountryCode($rule['phone']))
                            {
                                $country_code = $country->getCountryCode($rule['phone']);
                                $user->state = "NOK";
                                $user->country_name = $rule['title'];
                                $user->country_code = '+' . $country_code;
                                array_push($filterd_users, $user);
                            }
                            continue;
                        }
                    }
                }
            }
            $all_data['users'] = $filterd_users;
            $all_data['country_codes'] = $country_codes;
            return response()->json($all_data);
        }
    }
    public function getStateCountryFilter($country_filter,$state_filter)
    {
        $users = Customer::all();
        $country = new Country();
        $rules = $country->validRegx();
        $filterd_users = array();
        $country_codes = CountryCode::all();
        if ($country_filter || $state_filter) {
            foreach($users as $user) 
            {
                foreach($rules as $rule)
                {
                    if($rule['title'] == $country_filter && $state_filter == "OK") {
                        $value = preg_match_all($rule['phone'], $user->phone, $matches , PREG_OFFSET_CAPTURE);
                        if (!$value) {
                            continue;
                        } else {
                            $country_code = $country->getCountryCode($rule['phone']);
                            $user->state = "OK";
                            $user->country_name = $rule['title'];
                            $user->country_code = '+' . $country_code;
                            if ( $user->country_name == $country_filter )
                                array_push($filterd_users, $user);
                        }
                    }else if ($rule['title'] == $country_filter && $state_filter == "NOK" ) {
                        $value = preg_match_all($rule['phone'], $user->phone, $matches , PREG_OFFSET_CAPTURE);
                        if (!$value) {
                            $cc = substr($user->phone, 1,3);
                            if($cc == $country->getCountryCode($rule['phone']))
                            {
                                $country_code = $country->getCountryCode($rule['phone']);
                                $user->state = "NOK";
                                $user->country_name = $rule['title'];
                                $user->country_code = '+' . $country_code;
                                array_push($filterd_users, $user);
                            }
                            continue;
                        }
                    }
                }
            }
            $all_data['users'] = $filterd_users;
            $all_data['country_codes'] = $country_codes;
            return response()->json($all_data);
        }
    }
}
