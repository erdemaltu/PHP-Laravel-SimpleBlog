<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
        'name'=>'Blog Admin',
        'email'=>'blog@blog.com',
        'password'=>bcrypt(102030),
      ]);
    }
}
