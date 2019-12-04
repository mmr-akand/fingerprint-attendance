<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelTeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teoUser = Sentinel::registerAndActivate([
            'id' => '4',
            'email'    => 'teo@teo.com',
            'password' => 'teo',
            'name' => 'Teo Name',
            'phone' => 'teo',
            'status' => 'active',
        ]);

        $teoRole = Sentinel::findRoleBySlug('teo');
        $teoRole->users()->attach($teoUser);

        DB::table('profile_teos')->insert([
            'user_id' => '4',
            'upazila_id' => '1',
            'profile_dpeo_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->command->info('Teo User seeded!');
    }
}
