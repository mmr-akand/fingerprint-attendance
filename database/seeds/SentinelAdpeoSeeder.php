<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelAdpeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adpeoUser = Sentinel::registerAndActivate([
            'id' => '3',
            'email'    => 'adpeo@adpeo.com',
            'password' => 'adpeo',
            'name' => 'Adpeo Name',
            'phone' => 'adpeo',
            'status' => 'active',
        ]);

        $adpeoRole = Sentinel::findRoleBySlug('adpeo');
        $adpeoRole->users()->attach($adpeoUser);

        DB::table('profile_adpeos')->insert([
            'user_id' => '3',
            'district_id'=>'1',
            'profile_dpeo_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->command->info('Adpeo User seeded!');
    }
}
