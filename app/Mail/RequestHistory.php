<?php

namespace App\Mail;

use App\Models\Tickethistory;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestHistory extends Mailable
{
    use Queueable, SerializesModels;

    public $ticketHistory;

    public function __construct(Tickethistory $ticketHistory)
    {
        $this->ticketHistory = $ticketHistory;
    }

    public function build()
    {
        return $this->from('jarvis@berthojoris.com')->markdown('emails.request_history');
    }
}
