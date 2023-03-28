<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AboutUs;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'rubaWaam4',
            'email'=>'ruba@waam4.com',
            'password'=>bcrypt('zM*6MfUBB'),
            'role_name'=>'admin',
        ]);
        AboutUs::create([
              'name'=>'WAAM 4 Medical Services',
            'summary'=>'WAAM 4 Medical Services',
            'address'=>'AL Mousa Center , 6705 Al Ulaya, Riyadh, Kingdom of Saudi Arabia',
            'goals'=>'Providing customers with medical products in the field of dentistry and general medicine',
            'vision'=>'To become market leaders in medical and pharmaceutical service, by providing reliable value -added solutions to our customers.',
            'mission'=>'Providing customers with the best and selected products, improvement of human life',
            'email'=>'info@waam4.com',
            'moobile'=>'966594456103',
            'fax'=>'+966567237104',
            'logo'=>'doc-1679300477.png',
            'image'=>'doc-1679335424.png',
        ]);

    }
}
