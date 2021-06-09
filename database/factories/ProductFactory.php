<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(100,300),
            'stock'=>$this->faker->numberBetween(1,12),
            'discount' =>$this->faker->numberBetween(0,8),
            'user_id'=>function(){
                return User::all()->random();
            }
        ];
    }
}
