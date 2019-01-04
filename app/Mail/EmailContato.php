<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailContato extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $telefone;
    public $mensagem;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $telefone, $mensagem)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('noreply@grupotesseract.com.br')
            ->to('jleopaci@gmail.com')
            ->subject('Jussara Leopaci # Contato pelo site <---')
            ->view('emails.contato');
    }
}
