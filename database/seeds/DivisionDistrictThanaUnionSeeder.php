<?php

use Illuminate\Database\Seeder;

class DivisionDistrictThanaUnionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
           'id' => 1,
           'name' => 'Rangpur',
           'created_at' => now(),
           'updated_at' => now()
       ]);

        DB::table('districts')->insert([
           'id' => 1,
           'division_id' => 1,
           'name' => 'Panchagarh',
           'created_at' => now(),
           'updated_at' => now()
       ]);

        DB::table('upazilas')->insert([
           'id' => 1,
           'district_id' => 1,
           'name' => 'Panchagarh Sadar',
           'created_at' => now(),
           'updated_at' => now()
       ]);

        DB::table('unions')->insert(['id' => 1, 'name' => 'Panchagarh Sadar', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 2, 'name' => 'Amarkhana', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 3, 'name' => 'Chaklarhat', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 4, 'name' => 'Dhakkamara', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 5, 'name' => 'Garinabari', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 6, 'name' => 'Hafizabad', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 7, 'name' => 'Haribhasa', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 8, 'name' => 'Kamat Kajal Dighi', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 9, 'name' => 'Magura', 'upazila_id' => 1]);
        DB::table('unions')->insert(['id' => 10, 'name' => 'Satmara', 'upazila_id' => 1]);
    }
}
