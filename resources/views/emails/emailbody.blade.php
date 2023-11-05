<x-mail::message>
# Mensagem de {{ $data['name'] }}

<p>Campanha: {{ $data['targetClient'] }}</p>
<p>Telefone: <strong>{{ $data['telefone'] }}</strong></p>
<p>E-mail: <strong>{{ $data['email'] }}</strong></p>

<p>
    Mensagem:<br>
    {{ $data['messageText'] }}
</p>

<x-mail::button :url="'https://wa.me/'.$data['onlynumbers']">
Iniciar conversa no Whatsapp
</x-mail::button>

Enviado por,<br>
{{ config('app.name') }}
</x-mail::message>

<script>
    let onlynumber;
    onlynumber = $data['telefone'].replace(/[^a-zA-Z ]/g, "");
</script>
