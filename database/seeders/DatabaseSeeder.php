<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\User;
use App\Models\Brand;
use App\Models\Ticket;
use App\Models\Fileupload;
use App\Models\Information;
use App\Models\Tickethistory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Brand::factory(10)->create();
        Fileupload::factory(10)->create();
        Log::factory(10)->create();
        Information::factory(10)->create();
        Ticket::factory(10)->create();
        Tickethistory::factory(10)->create();
    }
}
