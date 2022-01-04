<?php

use Illuminate\Database\Seeder;
use App\Testi;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testi::create([
            'name' => "Ahmed",
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void',
            'spec' => "FrontEnd Developer",
            'img' => "1.png",

        ]);
        Testi::create([
            'name' => "Omer",
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void',
            'spec' => "FrontEnd Developer",
            'img' => "2.png"

        ]);
        Testi::create([
            'name' => "Huda",
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void',
            'spec' => "FrontEnd Developer",
            'img' => "3.png"

        ]);
    }
}
