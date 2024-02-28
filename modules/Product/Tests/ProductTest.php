<?php

namespace Modules\Product\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Product\Models\Product;

use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function test_it_can_create_product()
    {
        $product = Product::factory()->create();
        dd($product);
//        $this->assertTrue(true);
    }
}
