<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UrlMap>
 */
class UrlMapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is_custom = (bool)rand(0,1);
        $is_alive = rand(0,60)<3;

        return [
            'original_url' => $this->faker->url(),
            'short_url' => $this->generate_hash(7),
            'custom_url'=>$is_custom?$this->generate_hash(10):null,
            'expiration_date'=>$is_custom?$this->faker->dateTimeThisDecade():null,
            'user_id'=>User::factory(),
            'alive'=>$is_alive
        ];
    }

    public function generate_hash($long_hash = 7){

        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"; 

        $max_length = strlen($characters);

        $hash_generated = "";

        for($number = 0; $number < $long_hash; $number++ ){

            $random_position = rand(0, $max_length -1);

            $hash_generated .= $characters[$random_position];
        }

        return $hash_generated;
    }
}
