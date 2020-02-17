<?php

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
        $this->call(balanceSeeder::class);
        $this->call(inversionesSeeder::class);
        $this->call(serviciosSeeder::class);
    }
    
}
