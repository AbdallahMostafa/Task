<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function country()
    {
        return $this->hasMany(Country::class);
    }
    protected $table = 'customer';
}
