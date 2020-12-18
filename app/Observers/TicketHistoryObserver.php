<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Tickethistory;

class TicketHistoryObserver
{

    public function saving(Tickethistory $tickethistory)
    {
        $tickethistory->uuid = Str::uuid();
    }

    public function created(Tickethistory $tickethistory)
    {
        //
    }

    public function updated(Tickethistory $tickethistory)
    {
        //
    }

    public function deleted(Tickethistory $tickethistory)
    {
        //
    }

    public function restored(Tickethistory $tickethistory)
    {
        //
    }

    public function forceDeleted(Tickethistory $tickethistory)
    {
        //
    }
}
