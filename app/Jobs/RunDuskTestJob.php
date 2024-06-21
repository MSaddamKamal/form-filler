<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tests\Browser\AutoFillFormTest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class RunDuskTestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::find($this->userId);

        if (!$user) {
            \Log::error('User not found!');
            return;
        }

        // Store the user ID in a temporary file
        File::put(storage_path('app/dusk-user-id'), $this->userId);

        // Run the Dusk test
        Artisan::call('dusk', [
            '--filter' => 'AutoFillFormTest'
        ]);

        File::delete(storage_path('app/dusk-user-id'));

        \Log::info('Form filled and submitted successfully!');
    }
}
