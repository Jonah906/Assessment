<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function it_can_create_a_product()
    {
        $data = [
            'name' => 'Sample Product',
            'price' => 49.99,
            'stock' => 10,
        ];

        $response = $this->postJson('/api/products', $data);

        $response->assertStatus(201) 
                 ->assertJson([
                     'name' => 'Sample Product',
                     'price' => 49.99,
                     'stock' => 10,
                 ]);

        $this->assertDatabaseHas('products', $data);
    }
}