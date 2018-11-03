<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * HTTPStatusが200なのを確認
 * responseに「こんにちは」が来るのを確認
 * 
 */
class HomeTest extends TestCase
{
    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }
    public function testStateCode(){
        $response = $this->get('/home');
        $response->assertStatus(200);
    }
    public function testBody(){
        $response = $this->get('/home');
        $response->assertSeeText("こんにちは");
    }
}
