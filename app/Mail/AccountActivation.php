<?php

namespace App\Mail;

use App\users;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Socialite\One\User;

class AccountActivation extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(users $user)
    {
        $this->user = $user;

        $this->url = env('BASE_URL')."/account/activate/".$user->email."/".$user->code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.account-activation');
    }
}
