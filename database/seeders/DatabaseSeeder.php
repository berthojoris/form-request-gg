<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\User;
use App\Models\Brand;
use App\Models\Ticket;
use App\Models\Fileupload;
use App\Models\Information;
use Illuminate\Support\Str;
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
        // User::factory(10)->create();
        // Brand::factory(10)->create();
        // Fileupload::factory(10)->create();
        // Log::factory(10)->create();
        // Information::factory(10)->create();
        // Ticket::factory(10)->create();
        // Tickethistory::factory(10)->create();
        User::create([
            'name' => 'Bertho',
            'email' => 'berthojoris@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOTiv8l.DR8hBOrSJhU92OrQ8bTbUeb9YYGyOoOid0m5WlX8olPCW', // malaquena
            'remember_token' => Str::random(10),
        ]);
    }
}
