<?php

namespace App\Http\Controllers;

use App\Jobs\RunDuskTestJob;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Tests\Browser\AutoFillFormTest;

class FormController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->favorite_color = $request->input('favorite_color');
        $contact->save();

        return 'Form submitted!';
    }

    public function getUserData($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function autoFillForm($id)
    {
        // Dispatch the job to run the Dusk test
        RunDuskTestJob::dispatch($id);

        return 'Form fill job has been dispatched!';
    }
}
