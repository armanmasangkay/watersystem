<?php

namespace Database\Factories;

use App\Classes\Interfaces\IUserAccountNumber;
use App\Classes\UserAccountNumber;
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

        // IUserAccountNumber $accountNumber=new UserAccountNumber();

        return [
          
            'account_number'=>$this->faker->unique()->randomNumber(4),
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
