<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class AmarkhanaUnionSeeder extends Seeder
{
	const AMARKHANA = 2;
    
    public function run()
    {
        $name = 'Shalmara Vitorgarh Government Primary School';
        $address = 'Shalmara, Amorkhana, Panchagarh';
        $code = '91101040104';
        $data = [
			['Md. Joynal Abdin', '911040001', '0176332995'],
			['Mst. Khohinur', '911040002', '01725233065'],
			['Snatana Rani', '911040003', '01710426360'],
			['Khadizatul Farhana', '911040004', '01796148178'],
			['Bilkis-Ara-Begum', '911040005', '01750586560']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Bodinajot Government Primary School';
        $address = 'Bodinajot, Amorkhana, Panchagarh';
        $code = '91101040106';
        $data = [
            ['Shahneaj Begum', '911060001', '01714910503'],
            ['Anjuman Ara', '911060002', '01725976355'],
            ['Trishnika Sing', '911060003', '01717544974'],
            ['Mst. Asma Khatun', '911060004', '01722357339'],
            ['Umma Mahbuba', '911060005', '01743322000'],
            ['Nipa Roy', '911060006', '01725872564'],
            ['Ripa Akhtar', '911060007', '01773853141']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Dawrikamary-1 Government Primary School';
        $address = 'Dangapara, Amorkhana, Panchagarh.';
        $code = '91101040105';
        $data = [
            ['Most. Mahfuza Hossain', '911050001', '01716266870'],
            ['Mst. Mokseda Khatun', '911050002', '01752066675'],
            ['Most. Afroza Begum', '911050003', '01770870141'],
            ['Wahida Akhter', '911050004', '01717545570'],
            ['Rupom Chandra Barman', '911050005', '01740169057'],
            ['Nadira Sultana', '911050006', '01768889068'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {  
        $school = School::where('name', $name)->where('deviceid', $code)->first();
        if($school)
            return;
              
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::AMARKHANA,
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
