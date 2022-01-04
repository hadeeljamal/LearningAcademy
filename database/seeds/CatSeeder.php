<?php

use Illuminate\Database\Seeder;
use App\Cat;
class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
        'name' => 'Web Development']);
        Cat::create([
        'name' => 'Designing']);
        Cat::create([
        'name' => 'Energy']);
    }
}
