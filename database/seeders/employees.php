<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\employee;
class employees extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        employees::create(
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
