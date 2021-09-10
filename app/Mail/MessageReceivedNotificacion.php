<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceivedNotificacion extends Mailable
{
    use Queueable, SerializesModels;

    public $actoas;
    public $aprendiz;
    public $solicitarComite;
    public $actaComite;
    public $tipofalta, $gravedad, $reglamento, $citacion, $tipoP, $tipoN, $usuario;
    


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($actoas, $aprendiz, $solicitarComite, $actaComite, $tipofalta, $gravedad, $reglamento, $citacion, $tipoP, $tipoN, $usuario)
    {
        $this->actoas = $actoas;
        $this->aprendiz = $aprendiz;
        $this->solicitarComite = $solicitarComite;
        $this->actaComite = $actaComite;
        $this->tipofalta = $tipofalta;
        $this->gravedad = $gravedad;
        $this->reglamento = $reglamento;
        $this->citacion = $citacion;
        $this->tipoP = $tipoP;
        $this->tipoN = $tipoN;
        $this->usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-received-actoas');
    }
}
