<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' =>function(){
                return Product::all()->random();
            },
            'cust_name'=>$this->faker->name(),
            'cust_review' =>$this->faker->text(),
            'star'=>$this->faker->numberBetween(0,5),
        ];
    }
}
