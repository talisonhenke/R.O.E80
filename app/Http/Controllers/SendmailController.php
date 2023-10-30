<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\Sendmail;

class SendmailController extends Controller
{
    public function clean($string) {
        $string = str_replace('-', '', $string); // Replaces all hyphens with nothing.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }

    public function store(Request $request)

    {
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $onlynumbers = $request->telefone;
        $messageText = $request->messageText;

        $onlynumbers = $this->clean($onlynumbers);

        $data = [
            'name' => $name,
            'email' => $email,
            'telefone' => $telefone,
            'messageText' => $messageText,
            'onlynumbers' => $onlynumbers
        ];

        // Mail::to($email)->send(new Sendmail($data)); // Enviar para o email preenchido no campo
        Mail::to('roesite@thenkedeploytests.com.br')->send(new Sendmail($data));
        dd('email enviado com sucesso!');
    }
}
