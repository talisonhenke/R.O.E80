<x-mail::message>
# Mensagem de Rafael Oliveira Erben

<p>Olá, {{ $data['name'] }}!</p>
<p>Recebi sua mensagem e entrarei em contato o mais breve possível.</p>
<p>Qualquer dúvida, estou à disposição via Whatsapp!</p>

<x-mail::button :url="'https://wa.me/5553984734353'">
Iniciar conversa no Whatsapp
</x-mail::button>

Antenciosamente,<br>
<p>Rafael Oliveira Erben</p>
</x-mail::message>
