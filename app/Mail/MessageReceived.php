<?php

namespace App\Mail;

use App\Models\Aprendiz;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje recibido';
    public $msg;
    public $aprendiz;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($citacion, $aprendiz)
    {
        $this->msg = $citacion;
        $this->aprendiz = $aprendiz;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-received');
    }
}
