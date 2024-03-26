<?php
namespace Database\Factories;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $faker = \Faker\Factory::create();
    
        return [
            'description' => $faker->sentence,
            'image' => 'product-'.rand(1,6).'.png',
            'Name' => $faker->Name,
            'Price' => $faker->randomFloat(2, 10, 100),
        ];
    }
}
