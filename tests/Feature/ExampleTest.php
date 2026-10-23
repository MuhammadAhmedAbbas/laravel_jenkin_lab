<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_homepage_redirects_to_students(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/students');
    }

    public function test_students_page_returns_successful_response(): void
    {
        $response = $this->get('/students');

        $response->assertStatus(200);
    }
}
