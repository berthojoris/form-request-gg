@component('mail::message')
# Dear {{ $ticketHistory->ticket->pic_request }},

Terkait request <b>{{ $ticketHistory->ticket->project_name }}</b> ada update terbaru dari <b>{{ $ticketHistory->ticket->userDestination->name }}</b> dengan keterangan : <br>
<b>{{ $ticketHistory->note }}</b>
<br>
Demikian informasinya

<br>
<br>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
