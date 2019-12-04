<?php

use Illuminate\Database\Seeder;

class DivisionDistrictThanaSeeder extends Seeder
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
           'name' => 'Boda',
           'created_at' => now(),
           'updated_at' => now()
       ]);
    }
}
