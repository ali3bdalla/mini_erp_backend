<?php

namespace Tests\Feature\Product;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateProductTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function to_check_if_update_product_works_fine()
    {

        auth()->loginUsingId(1);
        $product = Product::inRandomOrder()->first();

        $data = [
            'en_name' => $this->faker->streetName,
            'ar_name' => $this->faker->colorName,
            'ar_description' => $this->faker->sentence,
            'en_description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(10,105)
        ];

        $response = $this->put(route('products.update',$product->id),$data,
            ['accept'=>'application/json']);



        $response->assertStatus(302);
    }
}
