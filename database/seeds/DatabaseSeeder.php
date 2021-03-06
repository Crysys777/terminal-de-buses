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
        $this->call(EmpresasTableSeeder::class);
        $this->call(BusesTableSeeder::class);
        $this->call(TipoBusesTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(AsientosTableSeeder::class);
    }
}
