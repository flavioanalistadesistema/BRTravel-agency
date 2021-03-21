@component('mail::message')
@component('mail::panel')
Nova Cotação de <strong>{{ $client->name_budgets }}</strong>
@endcomponent
<h1>Este é uma cotação prenchida no site Travel Agency</h1>
<p>Nome: {{$client->name_budgets}}</p>
<p>Telefone: {{$client->phone_budgets}}</p>
<p>Email: {{$client->email_budgets}}</p>
<p>Origem: {{$client->origin_budgets}}</p>
<p>Destino: {{$client->destination_budgets}}</p>
<p>Check-in: {{$date_in}}</p>
<p>Check-out: {{$date_out}}</p>
@endcomponent
