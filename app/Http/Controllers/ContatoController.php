<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{
    /**
     * Metodo para disparar o email de contato.
     *
     * @return void
     */
    public function postContato(ContatoRequest $request)
    {
        \Flash::success('Muito obrigado. Em breve entrarei em contato.');

        \Mail::send(new \App\Mail\EmailContato($request->nome, $request->telefone, $request->mensagem));

        return redirect('/#contato');
    }
}
