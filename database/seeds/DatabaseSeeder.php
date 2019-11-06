<?php

use Illuminate\Database\Seeder;
use App\Actor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actor::class, 20)->create();
    }
}
