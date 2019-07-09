<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
        ]);

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Dpeo',
            'slug' => 'dpeo',
        ]); 

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Adpeo',
            'slug' => 'adpeo',
        ]);

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Teo',
            'slug' => 'teo',
        ]); 

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Ateo',
            'slug' => 'ateo',
        ]); 

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Teacher',
            'slug' => 'teacher',
        ]);               

        $this->command->info('Roles seeded!');
    }
}
