@component('mail::message')
# Hi,

Request baru dari departemen <b>{{ $ticket->departemen_request }}</b> dengan nomor project <b>{{ $ticket->project_id }}</b>.
<br>
Status sementara <b>{{ $ticket->status }}</b> dan akan berubah ketika oleh PIC

Thanks,<br>
{{ config('app.name') }}
@endcomponent
