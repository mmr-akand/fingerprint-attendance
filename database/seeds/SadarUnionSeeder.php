<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class SadarUnionSeeder extends Seeder
{
	const SADAR = 1;

    public function run()
    {
        $name = 'Jagdal Sardar Para Government Primary School';
        $address = 'Sardar Para, Panchagarh Sadar, Panchagarh';
        $code = '99101041306';
        $data = [
            [ 'Md. Foyjul Haque', '993060001', '01734486410' ],
            [ 'Mst. Josneara Begum', '993060002', '01763002084' ],
            [ 'Md. Johirul islam', '993060003', '01750748575' ],
            [ 'Mst. Kamrun Naher', '993060004', '01710214792' ],
            [ 'Mst. Nasrin Akhter', '993060005', '01787476588' ]
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Jamviat Government Primary School';
        $address = 'Jamvita, Panchagarh Sadar, Panchagarh';
        $code = '99101041304';
        $data = [
            ['Mst. Hamida Begum', '993040001', '01727876961'],
            ['Mst. Sharmin Nehar', '993040002', '01768858184'],
            ['Md. Nasirul Islam', '993040003', '01761377600'],
            ['Mst. Rahima Akter', '993040004', '01770967651'],
            ['Mst. Zakia Parvin', '993040005', '01737880078']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Jagdal Government Primary School';
        $address = 'Jagdal, Panchagarh Sadar, Panchagarh';
        $code = '91101040301';
        $data = [
            ['Mollika Sarkar', '913010001', '01714927306'],
            ['Most. Nargis Akcter', '913010002', '01722842218'],
            ['Abida Sultana', '913010003', '01740861180'],
            ['Most. Tania Tifa Rahman', '913010004', '01763172011'],
            ['Most. Banjir Akther', '913010005', '01751030139'],
            ['Most. Ridhika Akter', '913010006', '01740081400']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Debottor Bosunia Para Government Primary School';
        $address = 'Bosunia Para, Panchagarh Sadar, Panchagarh';
        $code = '91101041302';
        $data = [
            ['Razia Sultana Bandhan', '913020001', '01719541500'],
            ['Khaleda Khanum', '913020002', '01723655688'],
            ['Md. Wahed Ali', '913020003', '01728195140'],
            ['Salena Akter', '913020004', '01754546383'],
            ['Mst. Sweety Begum', '913020005', '01714862740']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Kazi Para Government Primary School';
        $address = 'Kazi Para, Panchagarh Sadar, Panchagarh';
        $code = '91101040305';
        $data = [
            ['Ummey Rowshan Jahan', '913050001', '01736804090'],
            ['Kazi Md. Awlad Hossain', '913050002', '01719042748'],
            ['Md. Rasidul Islam', '913050003', '01720337896'],
            ['Selina Akhter', '913050004', '01725495620'],
            ['Sonom Farhana', '913050005', '01722307117']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);


        $name = 'Darikamary-3 Government Primary School';
        $address = 'Darikamary, Panchagarh Sadar, Panchagarh';
        $code = '91101040304';
        $data = [
            ['Md. Alauddin', '913040001', '01710630513'],
            ['Most. Masuda Akhter', '913040002', '01714692019'],
            ['Md. Nur Nabi Jinnah', '913040003', '01712481548'],
            ['Most. Shahana Begum', '913040004', '01720435883'],
            ['Most. Korima Begum', '913040005', '01722841690'],
            ['Most.Farzana Boby', '913040006', '01737500317'],
            ['Anjuman Ara Asha', '913040007', '01715210346'],
            ['Md. Nurujjaman', '913040008', '01723590670'],
            ['Israt Jahan', '913040009', '01760579040']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

    }


    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {       
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::SADAR,
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
