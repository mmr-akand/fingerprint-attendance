<?php

use Illuminate\Database\Seeder;

class SampleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('schools')->insert([
           'id' => 1,
           'name' => 'Amtoly Primary School',
           'union_id' => 1,
           'upazila_id' => 1,
           'profile_teo_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('schools')->insert([
           'id' => 2,
           'name' => 'Shimulia Primary School',
           'union_id' => 1,
           'upazila_id' => 1,
           'profile_teo_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('schools')->insert([
           'id' => 3,
           'name' => 'Patuavanga Primary School',
           'union_id' => 1,
           'upazila_id' => 1,
           'profile_teo_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('schools')->insert([
           'id' => 4,
           'name' => 'Pobonkhali Primary School',
           'union_id' => 1,
           'upazila_id' => 1,
           'profile_teo_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	//Data for amtoly school 
    	$user = Sentinel::registerAndActivate([
           'id' => 6,
           'name' => 'Golap Sir',
           'phone' => '0171001',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);
    	DB::table('profile_teachers')->insert([
           'id' => 1,
           'user_id' => 6,
           'school_id' => 1,
           'is_head_teacher' => 'yes',
           'parent_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	DB::table('users')->insert([
           'id' => 7,
           'name' => 'Khairul',
           'phone' => '0171002',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('profile_teachers')->insert([
           'id' => 2,
           'user_id' => 7,
           'school_id' => 1,
           'is_head_teacher' => 'no',
           'parent_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	DB::table('users')->insert([
           'id' => 8,
           'name' => 'Shapla',
           'phone' => '0171003',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('profile_teachers')->insert([
           'id' => 3,
           'user_id' => 8,
           'school_id' => 1,
           'is_head_teacher' => 'no',
           'parent_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);



    	//Data for shimulia school 
    	$user = Sentinel::registerAndActivate([
           'id' => 9,
           'name' => 'Akram Sir',
           'phone' => '0173001',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);
    	DB::table('profile_teachers')->insert([
           'id' => 4,
           'user_id' => 9,
           'school_id' => 2,
           'is_head_teacher' => 'yes',
           'parent_id' => 4,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	DB::table('users')->insert([
           'id' => 10,
           'name' => 'Hasim mam',
           'phone' => '0173002',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('profile_teachers')->insert([
           'id' => 5,
           'user_id' => 10,
           'school_id' => 2,
           'is_head_teacher' => 'no',
           'parent_id' => 4,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	DB::table('users')->insert([
           'id' => 11,
           'name' => 'Awal mam',
           'phone' => '0173003',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
    	DB::table('profile_teachers')->insert([
           'id' => 6,
           'user_id' => 11,
           'school_id' => 2,
           'is_head_teacher' => 'no',
           'parent_id' => 4,
           'created_at' => now(),
           'updated_at' => now()
        ]);


        //Data for patuavanga school 
    	$user = Sentinel::registerAndActivate([
           'id' => 12,
           'name' => 'Khokon',
           'phone' => '0175001',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);
    	DB::table('profile_teachers')->insert([
           'id' => 7,
           'user_id' => 12,
           'school_id' => 3,
           'is_head_teacher' => 'yes',
           'parent_id' => 7,
           'created_at' => now(),
           'updated_at' => now()
        ]);

    	DB::table('users')->insert([
           'id' => 13,
           'name' => 'Gulshan mam',
           'phone' => '0175002',
           'password' => '123456',
           'status' => 'active',
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('profile_teachers')->insert([
           'id' => 8,
           'user_id' => 13,
           'school_id' => 3,
           'is_head_teacher' => 'no',
           'parent_id' => 7,
           'created_at' => now(),
           'updated_at' => now()
        ]);


        //attendances
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-24 10:05:33',
           'departure' => '2019-12-24 16:20:33',
           'date' => '2019-12-24',
           'profile_teacher_id' => 1,
           'school_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-24 11:10:33',
           'departure' => '2019-12-24 16:50:33',
           'date' => '2019-12-24',
           'profile_teacher_id' => 2,
           'school_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-24 10:40:33',
           'departure' => '2019-12-24 16:30:33',
           'date' => '2019-12-24',
           'profile_teacher_id' => 4,
           'school_id' => 2,
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-25 10:00:33',
           'departure' => '2019-12-25 16:00:33',
           'date' => '2019-12-25',
           'profile_teacher_id' => 1,
           'school_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-25 11:00:33',
           'departure' => '2019-12-25 16:30:33',
           'date' => '2019-12-25',
           'profile_teacher_id' => 2,
           'school_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
        ]);
        DB::table('attendances')->insert([
           //'id' => 1,
           'entry' => '2019-12-25 10:30:33',
           'departure' => '2019-12-25 17:30:33',
           'date' => '2019-12-25',
           'profile_teacher_id' => 4,
           'school_id' => 2,
           'created_at' => now(),
           'updated_at' => now()
        ]);
    }
}
