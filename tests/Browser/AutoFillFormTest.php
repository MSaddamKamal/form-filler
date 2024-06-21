<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Log;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\File;

class AutoFillFormTest extends DuskTestCase
{

    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        // Retrieve the user ID from the temporary file
        $userId = File::get(storage_path('app/dusk-user-id'));
        Log::info('User ID: ' . $userId);
        $this->user = User::find($userId);
    }

    public function testFillAndSubmitForm()
    {
        $user = $this->user;

        if (!$user) {
            $this->fail('User not found!');
        }

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/contact')
                ->type('name', $user->name)
                ->select('favorite_color', $user->favorite_color)
                ->press('Submit')
                ->assertSee('Form submitted!');
        });
    }
}
