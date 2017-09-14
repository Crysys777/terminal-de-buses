<?php

use Illuminate\Database\Seeder;
use App\TipoBus;

class TipoBusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TipoBus::class, 3)->create();
    }
}
