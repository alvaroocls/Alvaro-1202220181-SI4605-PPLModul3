<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') #mengunjungi halaman utama
                    ->clickLink('Register') #click register
                    ->assertPathIs('/register') #memastikan sedang berada di path register
                    ->type('name','Alvaro') #memasukkan nama pada input field name
                    ->type('email','alvaro@gmail.com') #memasukkan email 
                    ->type('password','password') #memasukkan password
                    ->type('password_confirmation','password') #memasukkan confirm password
                    ->press('REGISTER') #menekan tombol register
                    ->assertPathIs('/dashboard'); #memastikan setelah register diarahkan ke dashboard
        });
    }
}
