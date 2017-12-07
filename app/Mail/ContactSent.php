<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSent extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * @var
     */
    private $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact.sent')
            ->text('emails.contact.sent_plain')
            ->subject('Nachricht von www.jinjing-asia.de '.date('Y-m-d H:i:s'))
            ->with($this->contact);
    }
}
