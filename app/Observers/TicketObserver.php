<?php

namespace App\Observers;

use App\Models\Ticket;
use Illuminate\Support\Str;

class TicketObserver
{

    public function saving(Ticket $ticket)
    {
        $ticket->uuid = Str::uuid();
        $ticket->status = 'OPEN';
        $ticket->project_id = session('projectid');
        $ticket->estimated_budget = Str::of(request('estimated_budget'))->replace(',', '');
    }

    public function created(Ticket $ticket)
    {
        //
    }

    public function updated(Ticket $ticket)
    {
        //
    }

    public function deleted(Ticket $ticket)
    {
        //
    }

    public function restored(Ticket $ticket)
    {
        //
    }

    public function forceDeleted(Ticket $ticket)
    {
        //
    }
}
