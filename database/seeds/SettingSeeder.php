<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => "Learning Academy",
            'logo' => 'lo.png',
            'favicon' => 'favicon.png',
            'city' => 'Gaza,Palestine',
            'address' => 'Khanyouns',
            'Phone' => '0595016546',
            'work_hours' => 'Sun To Thu 9am to 4pm',
            'email' => 'hadeeljamal656@gmail.com',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d435450.6779102412!2d34.6084993205078!3d31.497826674260804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1635807087515!5m2!1sar!2s" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'face' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'insta' => 'https://www.instagram.com/',

        ]);
    }
}
