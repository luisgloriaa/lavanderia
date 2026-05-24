<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrdersTest extends TestCase
{
    public function test_orders_page_loads()
    {
        $response = $this->get('/orders');

        $response->assertStatus(200);
    }
}