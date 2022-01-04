<?php

use App\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
            'name'=>'banner',
            'content'=>json_encode([
                'title'=>"EVERY Students YEARNS TO LEARN ",
                'sub_title'=>"Making Your World Better ",
                'desc' => "EVERY Students YEARNS TO LEARN Making Your Childs World Better Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
            ]),
        ]);
        SiteContent::create([
            'name'=>'feature',
            'content'=>json_encode([
                'title'=>"Awesome Feature ",
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ]),
        ]);
        SiteContent::create([
            'name'=>'chart1',
            'content'=>json_encode([
                'title'=>"Better Future ",
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ]),
        ]);
        SiteContent::create([
            'name'=>'chart2',
            'content'=>json_encode([
                'title'=>"Qualified Trainers ",
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ]),
        ]);
        SiteContent::create([
            'name'=>'chart3',
            'content'=>json_encode([
                'title'=>"Job Oppurtunity ",
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ]),
        ]);
        SiteContent::create([
            'name'=>'special_cource',
            'content'=>json_encode([
                'title'=>"popular courses ",
                'sub_title' => "Special Courses",
            ]),
        ]);
        SiteContent::create([
            'name'=>'testimonial',
            'content'=>json_encode([
                'title'=>"TESIMONIALS ",
                'sub_title' => "Happy Students",
            ]),
        ]);
    }
}
