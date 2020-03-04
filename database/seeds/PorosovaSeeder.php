<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class PorosovaSeeder extends Seeder
{
    const POROSOVA = 11;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $name = 'Karotoya Adarsha Shiksha Niketan Govt. Primary School';
        $address = 'Dokropara, Panchagarh';
        $code = '99101041302';
        $data = [
            ['Md. Rashedul Alam Sarker', '994130201', '01715143832'],
            ['Md. Mokbulur Rahman', '994130202', '01977757157'],
            ['Ramendra Chandra Paul', '994130203', '01732055849'],
            ['Mst. Kahinur Aktar', '994130204', '01782907439']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Mithapuqur Government Primary School';
        $address = 'Mithapuqur, Word-01, Porosova Panchagarh.';
        $code = '99101041202';
        $data = [
            ['Md. Moksed Ali', '992020001', '01727960093'],
            ['Khursid Zahan', '992020002', '01796834807'],
            ['Rabeya Sultana', '992020003', '01719749378'],
            ['Khadija Parvin', '992020004', '01717271044'],
            ['Baby Akther', '992020005', '01737467581'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    { 
        $school = School::where('deviceid', $code)->first();
        if($school)
            return;
               
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::POROSOVA,
           'upazila_id' => 1,
           'profile_teo_id' => 1
        ]);

        $user = Sentinel::registerAndActivate([
            'name' => $data[0][0], 'phone' => $data[0][2], 'password' => substr($data[0][2], -6),
        ]);
        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);
        $head = Tchr::create([
            'user_id'=>$user->id,'enrollid'=>$data[0][1],'school_id'=>$school->id,'is_head_teacher'=>'yes']);
        $head->parent_id = $head->id;
        $head->save();

        unset($data[0]);

        foreach ($data as $key => $value) {
            $user = User::create(['name' => $value[0], 'phone' => $value[2], 'password'=>'1']);
            $tchr = Tchr::create(['user_id'=>$user->id, 'enrollid'=>$value[1], 'school_id'=>$school->id]);
            $tchr->parent_id = $head->id;
            $tchr->save();
        }
    }
}
