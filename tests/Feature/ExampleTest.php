<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @Test
     *///realiza pruebas sin llamar alas paginas web
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /**
     * A basic test example.
     *
     * @Test
     *///realiza pruebas sin llamar alas paginas web
     public function Lista()
     {
        //  $this->withoutExceptionHandling();
         $response = $this->get('/Personas');
         $response->assertStatus(200);
     }
}
