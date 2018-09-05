<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Director::class)->times(10)->create();
    }
}
