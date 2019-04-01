<?php

use Illuminate\Database\Seeder;
use App\Model\Package\Plan;
class PlanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lite = Plan::create([
            'max_headsets' => '5',
            'life_time' => '1 WEEK',
            'description' => 'SHOWTIMEVR LITE',
            'price' => 25
        ]);
        $standard = Plan::create([
            'max_headsets' => '20',
            'life_time' => '1 MONTH',
            'description' => 'SHOWTIMEVR STANDARD',
            'price' => 400
        ]);
        $pro = Plan::create([
            'max_headsets' => '30',
            'life_time' => '1 YEAR',
            'description' => 'SHOWTIMEVR LITE PRO',
            'price' => 1600
        ]);
        $ultra = Plan::create([
            'max_headsets' => '50',
            'life_time' => 'CUSTOM ENTERPRISE',
            'description' => 'SHOWTIMEVR LITE ULTRA',
            'price' => 10000
        ]);
    }
}
