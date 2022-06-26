<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bar;
class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Bar::factory(20)->create();
    }
}
