<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Calon;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_pengguna' => 'Rongko Laksono',
            'email' => 'rongkolaks@gmail.com',
            'jenis_kelamin' => 'L',
            'tpa' => 'TPQ Baitul Makmur',
            'kecamatan' => 'Jetis',
            'pengurus' => 'Pengurus Badko TPA Rayon',
            'level' => 'Administrator',
            'username' => 'rongkolaks@gmail.com',
            'password' => bcrypt('1234567'),
            'status' => 1
        ]);

        User::create([
            'nama_pengguna' => 'Aku saja',
            'email' => 'akusaja@gmail.com',
            'jenis_kelamin' => 'L',
            'tpa' => 'TPQ Itu',
            'kecamatan' => 'Tegalrejo',
            'pengurus' => 'Bukan Pengurus',
            'level' => 'Pemilih',
            'username' => 'akusaja@gmail.com',
            'password' => bcrypt('password'),
            'status' => 1
        ]);

        User::create([
            'nama_pengguna' => 'Dimana Aku',
            'email' => 'dimanaaku@gmail.com',
            'jenis_kelamin' => 'P',
            'tpa' => 'TPQ Dimana',
            'kecamatan' => 'Gondokusuman',
            'pengurus' => 'Pengurus Badko TPA Rayon',
            'level' => 'Petugas',
            'username' => 'dimanaaku@gmail.com',
            'password' => bcrypt('password'),
            'status' => 1
        ]);


        Calon::create([
            'nama_calon' => 'Ahmad Saepudin',
            'username' => 'ahmadsaepudin',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus obcaecati amet placeat odit sequi, et alias neque sapiente error laborum, veritatis architecto optio perspiciatis, officia debitis consequuntur sint eos laudantium!'
        ]);

        Calon::create([
            'nama_calon' => 'Muhaimin',
            'username' => 'muhaimin',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati cumque eveniet illum esse sapiente accusantium quos dignissimos, reprehenderit quibusdam odio voluptatem eligendi expedita, iure doloribus tenetur vero eaque provident laboriosam.'
        ]);

        Calon::create([
            'nama_calon' => 'Andry Sunny',
            'username' => 'andrysunny1',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reprehenderit veritatis laborum laudantium voluptates commodi aut! Id sed officiis cupiditate dolores animi placeat enim provident ab fuga numquam, delectus officia.'
        ]);

        // User::factory(9)->create();

        // Calon::factory(3)->create();
    }
}
