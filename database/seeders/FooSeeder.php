<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foo;
class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Foo::factory(50)->create();

    }
}
