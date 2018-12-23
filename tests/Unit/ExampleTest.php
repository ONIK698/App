<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use app\Http\Controllers\Auth\loginController;
// use resources\views\Auth\login;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

/**
	* @ Check admin on existence
 	* @param string $input_test $example
	* @author Olya nikolaeva
	* @copyright 2018 
 	* @return string changed
 	*/
public function testDatabase()
{
    $this->assertDatabaseHas('users', ['isAdmin' => '1']);
}

}