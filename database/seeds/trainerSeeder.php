<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class trainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'Mohammed',
            'spec' => 'Web Development',
            'img' => '2.png'
        ]);
        Trainer::create([
            'name' => 'hazem',
            'spec' => 'Medical',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'Hassan',
            'spec' => 'Web Development',
            'img' => '4.png'
        ]);
        Trainer::create([
            'name' => 'Yazen',
            'spec' => 'English',
            'img' => '3.png'
        ]);
        Trainer::create([
            'name' => 'Hussam',
            'spec' => 'Web Development',
            'img' => '2.png'
        ]);
        Trainer::create([
            'name' => 'Ameer',
            'spec' => 'Medical',
            'img' => '6.png'
        ]);
    }
}
