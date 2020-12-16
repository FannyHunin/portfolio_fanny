<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AlertSender extends Mailable
{
    use Queueable, SerializesModels;
    public $alert;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($alertContent)
    {
        $this->alert = $alertContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fanny.hunin@gmail.com')->view('alert')->with(['alert' => $this->alert]);
    }
}
