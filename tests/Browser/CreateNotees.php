<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotees extends DuskTestCase
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
            ->clickLink('Create Note') #click create note
            ->assertPathIs('/create-note') #memastikan sedang berada di path create-note
            ->pause(2000)
            ->type('title','PLISSS') #memasukkan title pada input field title
            ->pause(2000)
            ->type('description','PLISSSSSSSSSSSSSSSSSSSS') #memasukkan description pada input field description
            ->pause(2000)
            ->press('CREATE') #menekan tombol create
            ->pause(2000)
            ->assertPathIs('/notes'); #memastikan setelah create diarahkan ke notes
        });
    }
}
