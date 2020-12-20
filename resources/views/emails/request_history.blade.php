@component('mail::message')
# Dear {{ $ticketHistory->ticket->pic_request }},

Terkait request dibawah<br>
- Nama Project : <b>{{ $ticketHistory->ticket->project_name }}</b><br>
- ID project : <b>{{ $ticketHistory->ticket->project_id }}</b><br>
- Status : <b>{{ $ticketHistory->status }}</b><br>

@if (!empty($ticketHistory->note))
Ada update terbaru dari <b>{{ $ticketHistory->ticket->userDestination->name }}</b> dengan keterangan : <br>
<b>{{ $ticketHistory->note }}</b>
@endif

<br><br>
Demikian informasinya
<br>
<br>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
