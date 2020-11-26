<?php

namespace Database\Seeders;

use App\Models\Tickethistory;
use Illuminate\Database\Seeder;

class TickethistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tickethistory::factory()->count(5)->create();
    }
}
