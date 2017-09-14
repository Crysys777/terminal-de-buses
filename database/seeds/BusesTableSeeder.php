<?php

use Illuminate\Database\Seeder;
use App\Bus;

class BusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bus::class, 80)->create();
    }
}
