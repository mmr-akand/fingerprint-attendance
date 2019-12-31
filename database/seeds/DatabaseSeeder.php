<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('schools')->truncate();
        DB::table('unions')->truncate();
        DB::table('upazilas')->truncate();
        DB::table('districts')->truncate();
        DB::table('divisions')->truncate();

        DB::table('profile_admins')->truncate();
        DB::table('profile_dpeos')->truncate();
        DB::table('profile_adpeos')->truncate();
        DB::table('profile_teos')->truncate();
        DB::table('profile_ateos')->truncate();

        DB::table('profile_teachers')->truncate();
        DB::table('attendances')->truncate();

        DB::table('users')->truncate();
        DB::table('role_users')->truncate();
        DB::table('roles')->truncate();

        $this->call(DivisionDistrictThanaUnionSeeder::class);
        $this->call(SentinelRoleSeeder::class);
        $this->call(SentinelAdminSeeder::class);
        $this->call(SentinelDpeoSeeder::class);
        $this->call(SentinelAdpeoSeeder::class);
        $this->call(SentinelTeoSeeder::class);
        $this->call(SentinelAteoSeeder::class);
        //$this->call(SampleData::class);
       
        /*
        DB::table('users')->truncate();
        DB::table('role_users')->truncate();
        DB::table('roles')->truncate();

        $this->call(SentinelRoleSeeder::class);
        $this->call(SentinelAdminSeeder::class);

        DB::table('schools')->truncate();
        DB::table('profile_teachers')->truncate();
        DB::table('schools')->truncate();*/

        $this->call(SadarUnionSeeder::class);
        $this->call(AmarkhanaUnionSeeder::class);
        $this->call(ChaklahatUnionSeeder::class);
        $this->call(DhakkamaraUnionSeeder::class);
        $this->call(GarinabariUnionSeeder::class);
        $this->call(HafizabadUnionSeeder::class);
        $this->call(HaribhasaUnionSeeder::class);
        $this->call(KamatKajalDighiUnionSeeder::class);
        $this->call(MaguraUnionSeeder::class);
        $this->call(SatmaraUnionSeeder::class);

        $this->command->info('All seeder seeded!');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();
    }
}
