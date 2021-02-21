<?php

namespace Database\Factories;

use App\Classes\BarangayFile;
use App\Classes\CustomerRandomData;
use App\Classes\Facades\UserAccountNumber;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {  
        $faker=new CustomerRandomData();
        $barangay=BarangayFile::getRandomBarangay();
     
        return [
            'account_number'=>UserAccountNumber::generateNew($barangay),
            'firstname'=>$this->faker->firstName(),
            'middlename'=>$this->faker->lastName(),
            'lastname'=>$this->faker->lastName(),
            'civil_status'=>$faker->civilStatus(),
            'purok'=>$faker->purok(),
            'brgy'=>$barangay,
            'contact_number'=>$faker->contactNumber(),
            'connection_type'=>$faker->connectionType(),
            'connection_status'=>$faker->connectionStatus()
            
        ];
    }
}
