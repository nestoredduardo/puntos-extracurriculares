<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Director;
use App\Models\Event;
use App\Models\Personal;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
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
        Unit::factory(3)->create();

        Admin::factory()->create(['name' => 'admin', 'email' => 'admin@n.com']);

        Director::factory(1)->create();

        Event::factory(3)->create();

        Personal::factory(3)->create();
    }
}
