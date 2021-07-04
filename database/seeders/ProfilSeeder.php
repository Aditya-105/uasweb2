<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profil::insert([
            [
                'judul'=>'About US',
                'keterangan'=>'Your goal is to throw the most epic party for your friends and family? Our goal is to capture these special moments for you. For us this is a big thing, as we always put a lot of effort in our work.',
                'logo'=>'logo-retina.png',
                'foto'=>'FILE0363.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
