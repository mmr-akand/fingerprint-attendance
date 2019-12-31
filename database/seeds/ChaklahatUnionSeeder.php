<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class ChaklahatUnionSeeder extends Seeder
{
	const CHAKLAHAT = 3;

    public function run()
    {        
        $name = 'Bogula Dangi Government Primary School';
        $address = 'Bogula Dangi, Chakla Hat, Panchagarh';
        $code = '91101040503';
        $data = [
            ['Mst. Sultana Arsheda', '915030001', '01722161139'],
            ['Mst. Jinnah Akhter', '915030002', '01710631279'],
            ['Md. Shahidul Islam', '915030003', '01719203838'],
            ['Mst. Zannatun Nahar', '915030004', '01723858857'],
            ['Mst. Sirazam Monira', '915030005', '01767731400'],
            ['Farjana Roza', '915030006', '01750825915'],
            ['Mst. Thanowara Manjure', '915030007', '01761145218'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Ramai Para Government Primary School';
        $address = 'Ramai Para, Chakla Hat, Panchagarh';
        $code = '91101040507';
        $data = [
            ['Abdur Rahaman', '915070001', '01718949700'],
            ['Md. Harun-Ar-Rashid', '915070002', '01723630831'],
            ['Md. Amirul Islam', '915070003', '01735961888'],
            ['Khonika Rani Singha', '915070004', '01740242345'],
            ['Khorseda Parvin', '915070005', '01737797821'],
            ['Md. Mostafizur Rahaman', '915070006', '01722413916'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Doksin Vatia Para Government Primary School';
        $address = 'Vatia Para, Chakla Hat, Panchagarh';
        $code = '99101040504';
        $data = [
            ['Jayanti Rani Roy', '995040001', '01717828905'],
            ['Horipad Roy', '995040002', '01710630518'],
            ['Md. Abu Bakar Siddique', '995040003', '01723313211'],
            ['Nur-E-Najma', '995040004', '01714863821'],
            ['Maleka Banu', '995040005', '01791881070'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Sarder Para Government Primary School';
        $address = 'Sarder Para, Chakla Hat, Panchagarh';
        $code = '99101040506';
        $data = [
            ['Md. Abu Alam Sarker', '995060001', '01717375298'],
            ['Md. Alamgir Hossain', '995060002', '01773309773'],
            ['Most. Mallika Begum', '995060003', '01723562707'],
            ['Most. Sapna Akter', '995060004', '01303251198'],
            ['Md. Anisujjaman', '995060005', '01730429596'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Dolo Para Sheikh Resel Government Primary School';
        $address = 'Dolo Para, Chakla Hat, Panchagarh.';
        $code = '701041582';
        $data = [
            ['Md. Rafiqul Islam', '705820001', '01710152342'],
            ['Mst. Monsura Begum', '705820002', '01786993227'],
            ['Mst. Fatema Jinna', '705820003', '01788209035'],
            ['Mst. Selina Begum', '705820004', '01794977622'],
            ['Mst. Tania Akter', '705820005', '01774603368'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Kakupara Government Primary School';
        $address = 'Kakupara, Chakla Hat, Panchagarh';
        $code = '99701049203';
        $data = [
            ['Hosnera Begum', '999203001', '01767673233'],
            ['Most. Monowara Begum', '999203002', '01722841165'],
            ['Laily Begum', '999203003', '01773847931'],
            ['Soneya Akter', '999203004', '01773901766'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Notun Chakla Hat Government Primary School';
        $address = 'Notun Chakla Hat, Chakla Hat, Panchagarh';
        $code = '91101040501';
        $data = [
            ['Mst. Afroza Begum', '915010001', '01735127721'],
            ['Monira Akhter', '915010002', '01712216890'],
            ['Shakila Afroz', '915010003', '01734672321'],
            ['Md. Aowal', '915010004', '01776910342'],
            ['Mst. Aklema Aktar', '915010005', '01739149290'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Singroad Joydhar Bharnga Government Primary School';
        $address = 'Joydhar Bhanga, Chakla Hat, Panchagarh';
        $code = '99101040501';
        $data = [
            ['Md. Rabuil Islam', '995010001', '01785358301'],
            ['Md. Nasrul Haque', '995010002', '01710944172'],
            ['Mst. Forida Banu', '995010003', '01781093627'],
            ['Md. Nur Islam', '995010004', '01721899384'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Vandaru Gram L.S.S. Government Primary School';
        $address = 'Vandaru Gram, Chakla Hat, Panchagarh';
        $code = '99101040502';
        $data = [
            ['Md. Sayed Ali', '995020001', '01722562627'],
            ['Md. Mominul Islam', '995020002', '01751263881'],
            ['Mst. Rina Parvin', '995020003', '01797850535'],
            ['Md. Shahidul Islam', '995020004', '01716962041']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'Shingroad L.S.S. Government Primary School';
        $address = 'Prodhan Para, Chakla Hat, Panchagarh';
        $code = '99101040503';
        $data = [
            ['Salien Chadra Roy', '995030001', '01724545592'],
            ['Horish Chondra Ray', '995030002', '01724162045'],
            ['Azifa Begum', '995030003', '01737801610'],
            ['Sha Alam', '995030004', '0172389243'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        $name = 'SingRoad Dakkin Khalpara Government Primary School';
        $address = 'Dakkin Khalpara, Chakla Hat, Panchagarh';
        $code = '99101040505';
        $data = [
            ['Md. Abdul Latif', '995050001', '01723891422'],
            ['Md. Jalal Uddin', '995050002', '01715359517'],
            ['Md. Motiul Islam', '995050003', '01723791063'],
            ['Shahanj Begum', '995050004', '01755461250']
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {       
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::CHAKLAHAT,
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
