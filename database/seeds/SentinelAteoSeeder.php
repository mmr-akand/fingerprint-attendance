<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelAteoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ateoUser = Sentinel::registerAndActivate([
            'id' => '5',
            'email'    => 'ateo@ateo.com',
            'password' => 'ateo',
            'name' => 'Ateo Name',
            'phone' => 'ateo',
            'status' => 'active',
        ]);

        $ateoRole = Sentinel::findRoleBySlug('ateo');
        $ateoRole->users()->attach($ateoUser);

        DB::table('profile_ateos')->insert([
            'user_id' => '5',
            'upazila_id' => '1',
            'profile_dpeo_id' => '1',
            'profile_teo_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->command->info('Ateo User seeded!');
    }
}
