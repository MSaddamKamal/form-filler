<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

//use Tests\Browser\Extensions\CustomBrowser as Browser;

class VeluxFormTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
//    public function testExample(): void
//    {
//        $this->browse(function (Browser $browser) {
////        $this->browse(function ($browser) {
//            $browser->maximize();
//            $browser->visit('https://www.velux.co.uk/products/electrical-roof-windows/extended-guarantee-form')
//                ->waitFor('#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll', 10)
//                ->click('#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll')
//                ->pause(10000)
////                ->waitFor('input[name="firstname"]', 10)
//                ->type('firstname', 'Test')
//                ->pause(10000)
//                ->type('lastname', 'Doe')
//                ->pause(10000)
//                ->type('address', '123 Main Street')
//                ->pause(10000)
//                ->type('zip', '12345')
//                ->pause(10000)
//                ->type('city', 'London')
//                ->pause(10000)
//                ->type('email', 'abc@velux.com')
//                ->pause(10000)
//                ->select('account_group', 'Installer')
//                ->pause(10000);
////                ->select('date_of_purchase_or_installation', 'Date of purchase');
////                ->type('date_of_purchase', '2024-06-17')
////                ->type('input[name="date_of_purchase"]', '2024-06-17')
//
////                ->scrollTo('.hs-dateinput')
////                ->mouseover('.hs-dateinput')
////                ->click('.hs-dateinput') // Click on the date picker input using the name attribute
////                ->pause(1000) // Pause to allow the date picker UI to appear
////                ->keys('input[name="date_of_purchase"]', '2024-06-24')
//
////                ->script([
////                    'document.querySelector("input[name=\'date_of_purchase\']").value = "2024-06-17";'
////                ]);
//
//
////            $browser->check('w1')
////                ->pause(1000)
////                ->waitFor('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 10)
////                ->select('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 'Solar')
////                ->select('window_registration', 'CFU')
////                ->select('window_1_size', '060060')
////                ->select('window_1_variant', '0020Q')
//
////            $browser->check('w1')
////                ->pause(1000)
//
//            $browser
//                ->waitFor('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 10)
//                ->select('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 'Solar')
//                ->pause(10000)
//                ->select('window_registration', 'CFU')
//                ->pause(10000)
//                ->select('window_1_size', '060060')
//                ->pause(10000)
//                ->select('window_1_variant', '0020Q')
//                ->pause(10000)
//                ->scrollTo('input[name="LEGAL_CONSENT.subscription_type_1026175"]')
//                ->mouseover('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')
//                ->click('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')
//
////                ->waitFor('input[name="LEGAL_CONSENT.subscription_type_1026175"]', 10) // Wait for the consent checkbox to be present
////                ->check('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')
//                //                ->press('Submit')
////                ->waitFor('button[type="submit"]', 10) // Ensure he submit button is visible
//////                ->waitFor('input[type="submit"].hs-button.primary.large', 10) // Ensure the submit button is visible
////                ->waitFor('input[type="submit"].hs-button.primary.large', 10) // Ensure the submit button is visible
////                ->script([
////                    'document.querySelector("input[type=\'submit\'].hs-button.primary.large").click();'
////                ]);
//
//
////            ->scrollTo('input[type="submit"]')
//                ->pause(2000)
//                ->mouseover('input[type="submit"]')
//                ->press('Submit')
////                ->assertSee('Please complete all required fields.');
//                ->assertSee('Your registration was received.');
////                ->pause(2000);
//
////            $browser->screenshot('form_submission_status'); // Take a screenshot for debugging
////            $browser->screenshotFullPage('tests/Browser/screenshots/form_submission_status.png');
////            $browser->assertSee('Your registration was received.');
//
//
////            $browser->pause(1000) // Pause to allow time for form submission and response
////            ->assertSee('Please complete all required fields.');
////                ->assertSee('Your registration was received.');
////                ->assertSee('Please complete all required fields.');
//
//            // Log form submission status for debugging
//            $browser->screenshot('form_submission_status'); // Take a screenshot for debugging
////              $browser->waitFor('#hubspotForm .submitted-message', 10) ;// Wait for the success message to appea
////            $browser->screenshotFullPage('tests/Browser/screenshots/form_submission_status.png'); // Take a screenshot for debugging
//        });
//    }

    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
//        $this->browse(function ($browser) {
            $browser->maximize();
            $browser->visit('https://www.velux.co.uk/products/electrical-roof-windows/extended-guarantee-form')
                ->waitFor('#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll', 10)
                ->click('#CybotCookiebotDialogBodyLevelButtonLevelOptinAllowAll')
                ->pause(2000)
//                ->waitFor('input[name="firstname"]', 10)
                ->type('firstname', 'Test')
                ->pause(2000)
                ->type('lastname', 'Doe')
                ->pause(2000)
                ->type('address', '123 Main Street')
                ->pause(2000)
                ->type('zip', '12345')
                ->pause(2000)
                ->type('city', 'London')
                ->pause(2000)
                ->type('email', 'abc@velux.com')
                ->pause(2000)
                ->select('account_group', 'Installer')
                ->pause(2000)
//                ->select('date_of_purchase_or_installation', 'Date of purchase');
//                ->type('date_of_purchase', '2024-06-17')
//                ->type('input[name="date_of_purchase"]', '2024-06-17')

//                ->scrollTo('.hs-dateinput')
//                ->mouseover('.hs-dateinput')
//                ->click('.hs-dateinput') // Click on the date picker input using the name attribute
//                ->pause(1000) // Pause to allow the date picker UI to appear
//                ->keys('input[name="date_of_purchase"]', '2024-06-24')

                ->script([
                    'document.querySelector("input[name=\'date_of_purchase\']").value = "2024-06-17";'
                ]);


//            $browser->check('w1')
//                ->pause(1000)
//                ->waitFor('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 10)
//                ->select('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 'Solar')
//                ->select('window_registration', 'CFU')
//                ->select('window_1_size', '060060')
//                ->select('window_1_variant', '0020Q')

//            $browser->check('w1')
//                ->pause(1000)

            $browser
                ->waitFor('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 10)
                ->select('#operation_1-fb5deca1-4772-403a-8264-e70034ac9811', 'Solar')
                ->pause(2000)
                ->select('window_registration', 'CFU')
                ->pause(2000)
                ->select('window_1_size', '060060')
                ->pause(2000)
                ->select('window_1_variant', '0020Q')
                ->pause(2000)
                ->scrollTo('input[name="LEGAL_CONSENT.subscription_type_1026175"]')
                ->mouseover('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')
                ->click('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')

//                ->waitFor('input[name="LEGAL_CONSENT.subscription_type_1026175"]', 10) // Wait for the consent checkbox to be present
//                ->check('label[for="LEGAL_CONSENT.subscription_type_1026175-fb5deca1-4772-403a-8264-e70034ac9811"]')
                //                ->press('Submit')
//                ->waitFor('button[type="submit"]', 10) // Ensure he submit button is visible
////                ->waitFor('input[type="submit"].hs-button.primary.large', 10) // Ensure the submit button is visible
//                ->waitFor('input[type="submit"].hs-button.primary.large', 10) // Ensure the submit button is visible
//                ->script([
//                    'document.querySelector("input[type=\'submit\'].hs-button.primary.large").click();'
//                ]);


//            ->scrollTo('input[type="submit"]')
                ->pause(2000)
                ->mouseover('input[type="submit"]')
                ->press('Submit')
                ->pause(4000)
                ->waitFor('#hubspotForm .submitted-message', 10) // Wait for the success message to appear within the hubspotForm
                ->scrollIntoView('#hubspotForm .submitted-message')
//                ->assertSee('Please complete all required fields.');
                ->assertSee('Your registration was received.')
                ->pause(2000);
//                ->pause(2000);

//            $browser->screenshot('form_submission_status'); // Take a screenshot for debugging
//            $browser->screenshotFullPage('tests/Browser/screenshots/form_submission_status.png');
//            $browser->assertSee('Your registration was received.');


//            $browser->pause(1000) // Pause to allow time for form submission and response
//            ->assertSee('Please complete all required fields.');
//                ->assertSee('Your registration was received.');
//                ->assertSee('Please complete all required fields.');

            // Log form submission status for debugging
            $browser->screenshot('form_submission_status'); // Take a screenshot for debugging
//              $browser->waitFor('#hubspotForm .submitted-message', 10) ;// Wait for the success message to appea
//            $browser->screenshotFullPage('tests/Browser/screenshots/form_submission_status.png'); // Take a screenshot for debugging
        });
    }
}
