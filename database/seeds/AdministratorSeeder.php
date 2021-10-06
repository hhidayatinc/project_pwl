<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Administrator";
        $admin->noktp = "3507235310010002";
        $admin->notelp = "085235655323";
        $admin->alamat = "Perum Ikip Tegalgondo Asri Blok 3D No 2";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");
    }
}
