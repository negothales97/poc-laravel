<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_basic_example()
    {
        $user = User::create([
            'name' => 'Thales',
            'email' => 'taylor@laravel.com',
            'password' => bcrypt('password')
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
