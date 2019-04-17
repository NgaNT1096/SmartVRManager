<?php

use Illuminate\Database\Seeder;
use App\Model\Package\Theme;
class ThemeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technology = Theme::create([
            'name' => 'Technology'
        ]);
        $education = Theme::create([
            'name' => 'Education'
        ]);
    }
}
