<?php

namespace Database\Seeders;


use App\Models\Web;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Web::create([
            'title'    => 'judul web',
            'logo'    => 'logo_default.png',
            'web_name'    => 'web kelulusan',
            'footer'    => 'web kelulusan',
            'about'    => 'website kelulusan opensource',
        ]);
    }
}
