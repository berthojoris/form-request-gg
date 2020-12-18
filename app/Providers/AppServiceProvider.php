<?php

namespace App\Providers;

use App\Models\Ticket;
use App\Models\Tickethistory;
use App\Observers\TicketObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\TicketHistoryObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Ticket::observe(TicketObserver::class);
        Tickethistory::observe(TicketHistoryObserver::class);
    }
}
