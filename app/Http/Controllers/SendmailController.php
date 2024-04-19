<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\Sendmail;

use App\Mail\SendMailConfirmation;

class SendmailController extends Controller
{
    public function clean($string) {
        $string = str_replace('-', '', $string); // Replaces all hyphens with nothing.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public function mailData($formData){
        // TODO: trazer o alert para o try/cat e criar uma nova classe que envia email de confirmação para o cliente
        try {
            Mail::to('rafaelroe3@gmail.com')->send(new Sendmail($formData));
            Mail::to('roesite@thenkedeploytests.com.br')->send(new Sendmail($formData));
        } catch (Exception $e) {
            echo '<script>alert("Seu email não foi enviado!\n
            Certifique-se de preencher todos dados corretamente!")</script>';
        }
    }
    public function mailDataConfirm($formData){
        // TODO: trazer o alert para o try/cat
        try {
            Mail::to($formData['email'])->send(new SendMailConfirmation($formData)); // Enviar para o email preenchido no campo
               
        } catch (Exception $e) {
            echo '<script>alert("Seu email não foi enviado!\n
            Certifique-se de preencher todos dados corretamente!")</script>';
        }
    }

    public function store(Request $request)

    {
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $onlynumbers = $request->telefone;
        $messageText = $request->messageText;
        $targetClient = $request->targetClient;

        $onlynumbers = $this->clean($onlynumbers);

        $data = [
            'name' => $name,
            'email' => $email,
            'telefone' => $telefone,
            'messageText' => $messageText,
            'onlynumbers' => $onlynumbers,
            'targetClient' => $targetClient
        ];

        $message = "Sua mensagem foi enviada! Te enviei um email de confirmação! Verfique sua caixa de entrada. Obrigado!";

        $this->mailData($data);
        $this->mailDataConfirm($data);

        if($targetClient == "Geral"){
            return redirect()->route('obrigado');
        }
        else if($targetClient == "Minha Casa, Minha Vida"){
            return redirect()->route('minha-casa_minha-vida_obrigado');
        }
        // return redirect()->back()->with('alert',$message);
        // Mail::to($email)->send(new Sendmail($data)); // Enviar para o email preenchido no campo
        //Mail::to('rafaelroe3@gmail.com')->send(new Sendmail($data));

    }
}
