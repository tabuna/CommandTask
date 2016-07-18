<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class SendWelcomeEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;


    protected $user;

    /**
     * Create a new job instance.
     * SendWelcomeEmail constructor.
     * @param User $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('accounts.emails.welcome', ['user' => $this->user], function ($message) {
            $message->to($this->user->email);
        });
    }
}
