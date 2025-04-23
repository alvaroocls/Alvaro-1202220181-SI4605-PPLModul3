<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
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
            ->clickLink('Edit')
            ->assertPathIs('/edit-note-page/6') #memastikan sedang berada di path edit-note
            ->type('title','Test Note') #memasukkan title pada input field title
            ->press('UPDATE') #menekan tombol update
            ->assertPathIs('/notes'); #memastikan setelah update diarahkan ke notes
            // ->assertSee('Note has been updated'); #memastikan ada tulisan Test Note di halaman notes
        });
    }
}
