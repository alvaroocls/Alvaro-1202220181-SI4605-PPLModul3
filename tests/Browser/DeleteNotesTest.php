<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in') #click login
            ->assertPathIs('/login') #memastikan sedang berada di path login
            ->type('email','alvaro@gmail.com') #memasukkan email 
            ->type('password','password') #memasukkan password
            ->press('LOG IN') #menekan tombol register
            ->assertPathIs('/dashboard') #memastikan setelah register diarahkan ke dashboar
            ->clickLink('Notes') #click notes
            ->assertPathIs('/notes') #memastikan sedang berada di path notes
            ->click('#delete-10'); #menekan tombol delete
        });
    }
}
