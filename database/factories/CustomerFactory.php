<?php

namespace Database\Factories;

use App\Classes\BarangayFile;
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

     
        return [
          
            'account_number'=>UserAccountNumber::generateNew(BarangayFile::getRandomBarangay()),
            'firstname'=>$this->faker->firstName(),
            'middlename'=>$this->faker->lastName(),
            'lastname'=>$this->faker->lastName(),
            'civil_status'=>'Married',
            'purok'=>$this->faker->cityPrefix,
            'brgy'=>$this->faker->cityPrefix,
            'contact_number'=>$this->faker->phoneNumber,
            'connection_type'=>$this->faker->realText(20),
            'connection_status'=>$this->faker->realText(20)
            
        ];
    }
}
