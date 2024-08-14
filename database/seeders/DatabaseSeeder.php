<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Super Admin',
            'email' => 'superadmin_backofice@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 0,
            'jawatan_sekolah' => 'Guru Besar',
            'kategori_sekolah' => 'super_admin',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin Backofice',
            'email' => 'admin_backofice@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 1,
            'jawatan_sekolah' => 'Guru Penolong Kanan',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin Sekolah Rendah',
            'email' => 'adminskrendah_sekolahrendah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 2,
            'jawatan_sekolah' => 'Guru Akademik',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin JK Sekolah Rendah',
            'email' => 'adminjk_sekolahrendah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 5,
            'jawatan_sekolah' => 'Staf',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin JP Sekolah Rendah',
            'email' => 'adminjp_sekolahrendah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 4,
            'jawatan_sekolah' => 'Staf',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Pengguna Sekolah Rendah',
            'email' => 'user_sekolahrendah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 6,
            'jawatan_sekolah' => 'Parent',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin Sekolah Menengah',
            'email' => 'adminskmenengah_sekolahmenengah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 3,
            'jawatan_sekolah' => 'Guru Akademik',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin JK Sekolah Menengah',
            'email' => 'adminjk_sekolahmenengah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 5,
            'jawatan_sekolah' => 'Staf',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Admin JP Sekolah Menengah',
            'email' => 'adminjp_sekolahmenengah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 4,
            'jawatan_sekolah' => 'Staf',
            'telp' => '081829891888'
        ]);
        User::create([
            'name' => 'Pengguna Sekolah Menengah',
            'email' => 'user_sekolahmenengah@gmail.com',
            'password' => Hash::make('123456'),
            'dob' => '2000-10-10',
            'avatar' => 'images/avatar-1.jpg',
            'jawatan_app' => 6,
            'jawatan_sekolah' => 'Parent',
            'telp' => '081829891888'
        ]);
    }
}
