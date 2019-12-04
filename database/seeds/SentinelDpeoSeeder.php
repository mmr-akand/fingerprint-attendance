<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelDpeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dpeoUser = Sentinel::registerAndActivate([
            'id' => '2',
            'email'    => 'dpeo@dpeo.com',
            'password' => 'dpeo',
            'name' => 'Dpeo Name',
            'phone' => 'dpeo',
            'status' => 'active',
        ]);

        $dpeoRole = Sentinel::findRoleBySlug('dpeo');
        $dpeoRole->users()->attach($dpeoUser);

        DB::table('profile_dpeos')->insert([
            'user_id' => '2',
            'district_id' =>'1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->command->info('Dpeo User seeded!');
    }
}
