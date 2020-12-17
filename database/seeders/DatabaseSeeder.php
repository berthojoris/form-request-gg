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
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        User::create([
            'name' => 'Bertho',
            'email' => 'berthojoris@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOTiv8l.DR8hBOrSJhU92OrQ8bTbUeb9YYGyOoOid0m5WlX8olPCW', // malaquena
            'remember_token' => Str::random(10),
        ]);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Monitoring']);
        Role::create(['name' => 'Digital Account']);
        Role::create(['name' => 'Brand Team']);
        Role::create(['name' => 'General']);

        Permission::create(['name' => 'list ticketrequest']);
        Permission::create(['name' => 'add ticketrequest']);
        Permission::create(['name' => 'detail ticketrequest']);
        Permission::create(['name' => 'edit ticketrequest']);
        Permission::create(['name' => 'delete ticketrequest']);

        Permission::create(['name' => 'list upload-file']);
        Permission::create(['name' => 'add upload-file']);
        Permission::create(['name' => 'edit upload-file']);
        Permission::create(['name' => 'delete upload-file']);

        Permission::create(['name' => 'list role']);
        Permission::create(['name' => 'add role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'list permission']);
        Permission::create(['name' => 'add permission']);
        Permission::create(['name' => 'edit permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'list user']);
        Permission::create(['name' => 'add user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'list dashboard']);
        Permission::create(['name' => 'list logsystem']);

        Permission::create(['name' => 'list information']);
        Permission::create(['name' => 'add information']);
        Permission::create(['name' => 'edit information']);
        Permission::create(['name' => 'delete information']);
    }
}
