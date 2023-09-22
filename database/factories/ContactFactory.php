<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                    'first_name' =>fake()->firstName(),
                    'last_name' => fake()->lastName(),
                    'phone' => fake()->phoneNumber(),
                    'email' => fake()->email(),
                    'address' => fake()->address(),
                    'company_id' => Company::pluck('id')->random(),
        ];
    }

}
// $factory->define(\App\Contact::class, function (Faker $faker){
//     return [
//         'first_name' =>$faker->sentence(2),
//         'last_name' => $faker->word(3),
//         'email' => $faker->email(2),
//     ];
// });