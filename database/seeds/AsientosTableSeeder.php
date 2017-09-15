<?php

use Illuminate\Database\Seeder;
use App\Asiento;

class AsientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Asiento::class, 80)->create();
    }
}
