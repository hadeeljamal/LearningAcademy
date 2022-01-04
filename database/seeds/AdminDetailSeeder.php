<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'Hadeeljamal']);
            Admin::create([
            'email' => 'hadeel55@gmail.com']);
            Admin::create([
            'password' => bcrypt('123456789')]);
    }
}
