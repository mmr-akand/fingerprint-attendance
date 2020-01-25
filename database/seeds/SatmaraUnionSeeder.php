<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class SatmaraUnionSeeder extends Seeder
{
    const SATMARA = 10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            
        $name = 'Satmera Fulbari Government Primary School';
        $address = 'Goaljhar, Satmera, Panchagarh.';
        $code = '91101040606';
        $data = [
            ['Md. Islmail Hossain', '916060001', '01734871323'],
            ['Md. Abu Nasher', '916060002', '01722468967'],
            ['Mst. Nazmun Nahar', '916060003', '01739907569'],
            ['Ummey Asma', '916060004', '01744346906'],
            ['Most. Munira Sultana', '916060005', '01780744279'],
            ['Momotaj Jahan', '916060006', '01738481601'],
            ['Mosa. Anwara Begum', '916060007', '01716201422'],
            ['Most. Sharmin Akter', '916060008', '01793989167'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);     


        $name = 'Bokshigonj Government Primary School';
        $address = 'Bokshigonj, Satmara, Panchagarh.';
        $code = '99101040604';
        $data = [
            ['Rejina Akhter', '996040001', '01747433593'],
            ['Md. Abdul Bari', '996040002', '01737236062'],
            ['Mst. Serajun Naher', '996040003', '01712707422'],
            ['Most. Nasrin Akter', '996040004', '01737624497'],
            ['Mst. Shanaj Begum', '996040005', '01737201637'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Pokhilaga Government Primary School';
        $address = 'Pokhilaga, Satmara, Panchagarh.';
        $code = '99101040605';
        $data = [
            ['Md. Abdul Mazid', '996050001', '01735480338'],
            ['Mokashawr Roy', '996050002', '01737586679'],
            ['Md. Alauddin', '996050003', '01741061341'],
            ['Most. Roksana Pervin', '996050004', '01710630436'],
            ['Most. Mahafuja Sultana', '996050005', '01751388730'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Nuchra Para Government Primary School';
        $address = 'Nuchra Para, Satmara, Panchagarh.';
        $code = '99101040606';
        $data = [
            ['Md. Joinal Abeden', '996060001', '01786856831'],
            ['Most. Hasina Begum', '996060002', '01743665556'],
            ['Most. Habiba Akter', '996060003', '01738038916'],
            ['Most. Monsura Begum', '996060004', '01733825624'],
            ['Md. Shaker Ali', '996060005', '01719203899'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Mize Para Government Primary School';
        $address = 'Mize Para, Satmara, Panchagarh.';
        $code = '99101040609';
        $data = [
            ['Md. Monsur Ali', '996090001', '01719542505'],
            ['Md. Obaydullah', '996090002', '01710427415'],
            ['Md. Abdul Latif', '996090003', '01734570784'],
            ['Yesmin Akhther', '996090004', '01723177066'],
            ['Fatiha Tajnin', '996090005', '01701509650'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Ahadnaghar Government Primary School';
        $address = 'Ahadnaghar, Satmara, Panchagarh.';
        $code = '99101040610';
        $data = [
            ['Md. Joynul Haque', '996100001', '01738268230'],
            ['Md. Bashirul Alam', '996100002', '01724677432'],
            ['Md. Mahabubur Rahaman', '996100003', '01749410906'],
            ['Most.Rowshonara', '996100004', '01722464634'],
            ['Shahanara Akter', '996100005', '01737530683'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Sotorong Para Government Primary School';
        $address = 'Sotorong Para, Satmara, Panchagarh.';
        $code = '99101040608';
        $data = [
            ['Md. Alab Uddin', '996080001', '01771398029'],
            ['Moriam Jamila', '996080002', '01716148615'],
            ['Most. Sharmin Akter', '996080003', '01783212462'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Velku Para Government Primary School';
        $address = 'Velku Para, Satmara, Panchagarh.';
        $code = '99101040609';
        $data = [
            ['Kazi Md. Tariqul Alam', '996090001', '01715023400'],
            ['Md. Zahid Hossain', '996090002', '01314152606'],
            ['Md. Akhter-Ud-Zaman', '996090003', '01717749074'],
            ['Md. Ahsanul Kabir Sazib', '996090004', '01750002080'],
            ['Md. Mostofa Kamal', '996090005', '01712150303'],
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
           'union_id' => self::SATMARA,
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
