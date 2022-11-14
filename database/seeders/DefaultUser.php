<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "josé",
            'email' => 'jose@mail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123')
        ]);
    }
}
