<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>$this->faker->randomElement([1, 2, 3, 4, 5]),
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' =>$this->faker->randomElement([1, 2, 3]),
            'email' =>$this->faker->email,
            'tel' =>$this->faker->numerify('###########'),
            'address' =>$this->faker->address,
            'building' =>$this->faker->secondaryAddress,
            'detail' =>$this->faker->realText(10),
        ];
    }
}
