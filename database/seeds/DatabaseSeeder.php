<?php

use App\Role;
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
        $adminRole = Role::create(['name'=>'admin','display_name'=>'Administrator']);
        // $this->call(UserSeeder::class);
    }
}
