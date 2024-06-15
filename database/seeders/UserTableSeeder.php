<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            ['account'=>'nguyenan01', 'password'=>'12344321', 'role'=>'0', 'address'=>'daskhbdkjas', 'phonenumber'=>'0917609567']
        ];
        foreach($users as $row) {
            DB::table('users')->insert($row);
        }
    }
}
