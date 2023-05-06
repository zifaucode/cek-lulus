<?php

namespace Database\Seeders;

use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'kop_logo_dinas'    => 'provinsi.png',
            'kop_nama_sekolah'    => 'SMAN 1 KEREN',
            'kop_alamat'    => 'jl.kemana aja jadi sendiri juga gas namanya juga hidup',
            'kop_telepon'    => '085677667788',
            'kop_pos'    => '16330',
            'kop_website'    => 'sman1keren.com',
            'kop_email'    => 'sman1keren@gmail.com',
            'kop_nama_disdik'    => 'sman1keren@gmail.com',
            'kop_th_pelajaran'    => 'sman1keren@gmail.com',
            'nama_surat'    => 'Surat Keterangan banget',
            'no_surat'    => 'IV16/08/001',
            'pembuka_surat'    => 'yang tertanda dibawah ini',
            'penutup_surat'    => 'Terimakasih',
            'jabatan_penandatangan'    => 'KEPALA SEKOLAH',
            'nama_penandatangan'    => 'fauzi',
            'nip_penandatangan'    => '1989988222822',
            'tempat'    => 'Bogor',
            'tanggal'    => Carbon::now()->format('Y-m-d'),
            'tanda_tangan'    => 'ttd.png',

        ]);
    }
}
