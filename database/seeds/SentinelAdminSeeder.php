<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$adminUser = Sentinel::registerAndActivate([
            'id' => '1',
            'email'    => 'admin@admin.com',
            'password' => 'admin',
            'name' => 'Admin',
            'phone' => 'admin',
            'status' => 'active',
        ]);

        $adminRole = Sentinel::findRoleBySlug('super-admin');
        $adminRole->users()->attach($adminUser);

        DB::table('profile_admins')->insert([
            'user_id' => '1',
        ]);

        $this->command->info('Admin User seeded!');*/

        $adminUser = Sentinel::registerAndActivate([
            'email'    => 'superadmin@admin.com',
            'password' => '**superadmin**',
            'name' => 'Super Admin',
            'phone' => 'superadmin',
            'status' => 'active',
        ]);

        $adminRole = Sentinel::findRoleBySlug('super-admin');
        $adminRole->users()->attach($adminUser);

        DB::table('profile_admins')->insert([
            'user_id' => $adminUser->id
        ]);

        $this->command->info('Admin User seeded!');
    }
}
