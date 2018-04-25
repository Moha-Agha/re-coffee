<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Drinker::class,10)->create();
        factory(App\Report::class,10)->create();
        factory(App\Coffee::class,10)->create();
    }
}
