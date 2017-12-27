<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends TestCase
{
    /**
     * Index page status 200 test.
     *
     * @return void
     */
    public function testIndexPageTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
