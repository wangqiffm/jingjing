<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationSent extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * @var
     */
    private $reservation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        //
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reservation.sent')
            ->text('emails.reservation.sent_plain')
            ->subject('Reservierung von www.jinjing-asia.de '.date('Y-m-d H:i:s'))
            ->with($this->reservation);
    }
}
