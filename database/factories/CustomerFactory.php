<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->optional()->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => bcrypt('password'),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state_id' => null,
            'country_id' => null,
            'pincode' => $this->faker->postcode,
            'uae_residence' => $this->faker->boolean,
            'mobile_number' => $this->faker->phoneNumber,
            'proof_document' => null,
            'status' => $this->faker->boolean(80),
            'iso2' => $this->faker->countryCode,
            'dialCode' => $this->faker->countryCode,
            'dob' => $this->faker->date,
            'business_interested' => $this->faker->sentence,
            'deleted_at' => null,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}

