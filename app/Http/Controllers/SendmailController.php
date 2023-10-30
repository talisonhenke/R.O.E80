<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendmailController extends Controller
{
    public function store(Request $request)

    {
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $messageText = $request->messageText;

        $data = [
            'nome' => $name,
            'email' => $email,
            'telefone' => $telefone,
            'messageText' => $messageText
        ];

        Mail::to($email)->send(new Sendmail($data));
        dd('email enviado com sucesso!');
    }
}
