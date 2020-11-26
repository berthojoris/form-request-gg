<?php

namespace Database\Seeders;

use App\Models\Fileupload;
use Illuminate\Database\Seeder;

class FileuploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fileupload::factory()->count(5)->create();
    }
}
