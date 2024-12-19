<?php

namespace Database\Seeders;
use app\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_tbl_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        tbl_users::create(
            [
            'name'=>'Hitansh patel',
            'email'=>'h@gmail.com',
            'dob'=>'20/08/2013',
            'gender'=>'Male',
            'contact'=>'9875678910',
            'city'=>'Mumbai',
            'language'=>'python,Java'
             ]
    );
    }
}
