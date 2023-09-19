<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class Producto extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_route(): void
    {
        $response = $this->get('product');
        $response->assertStatus(200);
    }
}
