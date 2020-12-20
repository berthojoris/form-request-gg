@component('mail::message')
# Dear {{ $ticketHistory->ticket->pic_request }},

Terkait request dengan detail sbb<br>

<ul>
    <li>Nama Project : <b>{{ $ticketHistory->ticket->project_name }}</b></li>
</ul>
<ul>
    <li>ID Project : <b>{{ $ticketHistory->ticket->project_id }}</b></li>
</ul>
<ul>
    <li>Status : <b>{{ $ticketHistory->status }}</b></li>
</ul>

@if (!empty($ticketHistory->note))
Telah ada update terbaru dari PIC <b>{{ $ticketHistory->ticket->userDestination->name }}</b> dengan keterangan : <br>
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
