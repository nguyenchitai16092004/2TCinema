<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ticketData;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->ticketData = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.ticket')
            ->subject('Thông tin vé xem phim');
    }
}