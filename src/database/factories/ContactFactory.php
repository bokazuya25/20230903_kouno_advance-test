<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'fullname'=>$this->faker->lastName().$this->faker->firstName(),
            'gender'=>$this->faker->numberBetween(1,2),
            'email'=>$this->faker->unique()->safeEmail,
            'postcode'=>$this->faker->regexify('[0-9]{3}-[0-9]{4}'),
            'address'=>$this->faker->address,
            'building_name'=>$this->faker->optional()->secondaryaddress,
            'opinion'=>$this->faker->realText($maxNbChar = 120, $indexsize = 2),
        ];
    }
}
