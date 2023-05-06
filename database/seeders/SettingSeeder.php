<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
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
            'status'    => 1,
            'date'    => Carbon::now()->format('Y-m-d'),
            'time'    => Carbon::now()->format('H:i'),

        ]);
    }
}
