<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create([
            'name'=>'Language Class',
            'description'=>'Language Class',
            'age'=>'8-10 years',
            'seat'=>20,
            'time'=>'10 AM-12AM',
            'fee'=>'50 USD'
        ]);
        Course::create([
            'name'=>'Art Class',
            'description'=>'Art Class',
            'age'=>'6-8 years',
            'seat'=>20,
            'time'=>'10 AM-12AM',
            'fee'=>'50 USD'
        ]);
        Course::create([
            'name'=>'Dance Class',
            'description'=>'Dance Class',
            'age'=>'6-10 years',
            'seat'=>20,
            'time'=>'10 AM-12AM',
            'fee'=>'50 USD'
        ]);
    }
}
