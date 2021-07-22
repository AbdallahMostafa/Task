<?php

use Illuminate\Database\Seeder;
use App\CountryCode;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addCountryCode([
            'country_name' => 'Cameroon',
            'country_code' => '+237',
        ]);

        $this->addCountryCode([
            'country_name' => 'Ethiopia',
            'country_code' => '+251',
        ]);

        $this->addCountryCode([
            'country_name' => 'Morocco',
            'country_code' => '+212',
        ]);

        $this->addCountryCode([
            'country_name' => 'Mozambique',
            'country_code' => '+258',
        ]);
        
        $this->addCountryCode([
            'country_name' => 'Uganda',
            'country_code' => '+256',
        ]);
    }

    private function addCountryCode($country_data)
    {
        $country_code = new CountryCode();
        $country_code->country_name = $country_data['country_name'];
        $country_code->country_code = $country_data['country_code'];
        $country_code->save();
    }
}
