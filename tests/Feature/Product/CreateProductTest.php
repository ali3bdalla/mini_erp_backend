<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CreateProductTest extends TestCase
{

    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function to_check_if_create_product_works_fine()
    {

        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.jpg');


        auth()->loginUsingId(1);
        $response = $this->post(route('products.store'),[
            'en_name' => $this->faker->streetName,
            'ar_name' => $this->faker->colorName,
            'ar_description' => $this->faker->sentence,
            'en_description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(10,105),
            'attachments' => [$file]
        ],[
            'Accept' => 'application/json'
        ]);

//        $response->dump();

        $response->assertStatus(302);
    }
}
