<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addCustomer([
            'name' => 'Walid Hammadi',
            'phone' => '(212) 6007989253',
        ]);

        $this->addCustomer([
            'name' => 'Yosaf Karrouch',
            'phone' => '(212) 698054317',
        ]);
        
        $this->addCustomer([
            'name' => 'Younes Boutikyad',
            'phone' => '(212) 6546545369',
        ]);

        $this->addCustomer([
            'name' => 'Houda Houda',
            'phone' => '(212) 6617344445',
        ]);

        $this->addCustomer([
            'name' => 'Chouf Malo',
            'phone' => '(212) 691933626',
        ]);

        $this->addCustomer([
            'name' => 'soufiane fritisse',
            'phone' => '(212) 633963130',
        ]);

        $this->addCustomer([
            'name' => 'Nada Sofie',
            'phone' => '(212) 654642448',
        ]);

        $this->addCustomer([
            'name' => 'Edunildo Gomes Alberto ',
            'phone' => '(258) 847651504',
        ]);

        $this->addCustomer([
            'name' => 'Walla\'s Singz Junior',
            'phone' => '(258) 846565883',
        ]);

        $this->addCustomer([
            'name' => 'sevilton sylvestre',
            'phone' => '(258) 849181828',
        ]);

        $this->addCustomer([
            'name' => 'Tanvi Sachdeva',
            'phone' => '(258) 84330678235',
        ]);

        $this->addCustomer([
            'name' => 'Florencio Samuel',
            'phone' => '(258) 847602609',
        ]);

        $this->addCustomer([
            'name' => 'Solo Dolo',
            'phone' => '(258) 042423566',
        ]);

        $this->addCustomer([
            'name' => 'Pedro B 173',
            'phone' => '(258) 823747618',
        ]);

        $this->addCustomer([
            'name' => 'Ezequiel Fenias',
            'phone' => '(258) 848826725',
        ]);

        $this->addCustomer([
            'name' => 'JACKSON NELLY',
            'phone' => '(256) 775069443',
        ]);

        $this->addCustomer([
            'name' => 'Kiwanuka Budallah',
            'phone' => '(256) 7503O6263',
        ]);

        $this->addCustomer([
            'name' => 'VINEET SETH',
            'phone' => '(256) 704244430',
        ]);

        $this->addCustomer([
            'name' => 'Jokkene Richard',
            'phone' => '(256) 7734127498',
        ]);

        $this->addCustomer([
            'name' => 'Ogwal David',
            'phone' => '(256) 7771031454',
        ]);

        $this->addCustomer([
            'name' => 'pt shop 0901 Ultimo ',
            'phone' => '(256) 3142345678',
        ]);

        $this->addCustomer([
            'name' => 'Daniel Makori',
            'phone' => '(256) 714660221',
        ]);

        $this->addCustomer([
            'name' => 'shop23 sales',
            'phone' => '(251) 9773199405',
        ]);

        $this->addCustomer([
            'name' => 'Filimon Embaye',
            'phone' => '(251) 914701723',
        ]);

        $this->addCustomer([
            'name' => 'ABRAHAM NEGASH',
            'phone' => '(251) 911203317',
        ]);

        $this->addCustomer([
            'name' => 'ZEKARIAS KEBEDE',
            'phone' => '(251) 9119454961',
        ]);

        $this->addCustomer([
            'name' => 'EPHREM KINFE',
            'phone' => '(251) 914148181',
        ]);

        $this->addCustomer([
            'name' => 'Karim Niki',
            'phone' => '(251) 966002259',
        ]);

        $this->addCustomer([
            'name' => 'Frehiwot Teka',
            'phone' => '(251) 988200000',
        ]);

        $this->addCustomer([
            'name' => 'Fanetahune Abaia',
            'phone' => '(251) 924418461',
        ]);

        $this->addCustomer([
            'name' => 'Yonatan Tekelay',
            'phone' => '(251) 911168450',
        ]);

        $this->addCustomer([
            'name' => 'EMILE CHRISTIAN KOUKOU DIKANDA HONORE ',
            'phone' => '(237) 697151594',
        ]);

        $this->addCustomer([
            'name' => 'MICHAEL MICHAEL',
            'phone' => '(237) 677046616',
        ]);

        $this->addCustomer([
            'name' => 'ARREYMANYOR ROLAND TABOT',
            'phone' => '(237) 6A0311634',
        ]);

        $this->addCustomer([
            'name' => 'LOUIS PARFAIT OMBES NTSO',
            'phone' => '(237) 673122155',
        ]);

        $this->addCustomer([
            'name' => 'JOSEPH FELICIEN NOMO',
            'phone' => '(237) 695539786',
        ]);

        $this->addCustomer([
            'name' => 'SUGAR STARRK BARRAGAN',
            'phone' => '(237) 6780009592',
        ]);

        $this->addCustomer([
            'name' => 'WILLIAM KEMFANG',
            'phone' => '(237) 6622284920',
        ]);

        $this->addCustomer([
            'name' => 'THOMAS WILFRIED LOMO LOMO',
            'phone' => '(237) 696443597',
        ]);
        
        $this->addCustomer([
            'name' => 'Dominique mekontchou',
            'phone' => '(237) 691816558',
        ]);
        
        $this->addCustomer([
            'name' => 'Nelson Nelson',
            'phone' => '(237) 699209115',
        ]);
    }

    private function addCustomer($customer_data)
    {
        $customer = new Customer();
        $customer->name = $customer_data['name'];
        $customer->phone = $customer_data['phone'];
        $customer->save();
    }
}
