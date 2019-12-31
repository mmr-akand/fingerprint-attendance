<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class DhakkamaraUnionSeeder extends Seeder
{
	const DHAKKAMARA = 4;

    public function run()
    {        
        $name = 'Komolapur Government Primary School ';
        $address = 'Komolapur, Dhakkamara, Panchagarh';
        $code = '91101040804';
        $data = [
['Mst. Aktari Banu', '918040001', '01716669364'],
['Shamima Akhter', '918040002', '01854907467'],
['Most. Mozida Pervin', '918040003', '01746009382'],
['Mst. Khaleda Begum', '918040004', '01738172284'],
['Mst. Tasmin Nuri', '918040005', '01710215392'],
['Most. Arefa Siddika', '918040006', '01717888084'],
['Farjana Sultana', '918040007', '01725301962'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Lathuapara Government Primary School';
        $address = 'Lathuapara, Dhakkamara, Panchagarh Sadar, Panchagarh';
        $code = '91101040806';
        $data = [
            ['Jharna Begum', '918060001', '01719203934'],
            ['Md. Anowar Hossain', '918060002', '01719203898'],
            ['Unkhown', '918060003', '01*********'],
            ['Most. Afia Jubaida Al-Ferdosy', '918060004', '01717590517'],
            ['Ahasana Sultana', '918060005', '01723758306'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Bokultola Government Primary School';
        $address = 'Boultola, Dhkakamara, Panchagarh Sadar, Panchagarh';
        $code = '91101040805';
        $data = [
            ['Mst. Mshamuda Begum', '918050001', '01792828004'],
            ['Mst. Asma Begum', '918050002', '01751078027'],
            ['Amina Parvin', '918050003', '01717643271'],
            ['Mst. Rashida Sultana', '918050004', '01710530376'],
            ['Shamim-ara', '918050005', '01728379186'],
            ['Shakila Sultana', '918050006', '01301164310'],
            ['Mst. Shahina Begum', '918050007', '01755377700'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Doruapara Government Primary School';
        $address = 'Dorua Para, Dhakkamara, Panchagarh Sadar, Panchagarh';
        $code = '91101040801';
        $data = [
            ['Syeda Anarkali', '918010001', '01723996700'],
            ['Most. Shamima Aktar', '918010002', '01714228918'],
            ['Most. Shakila', '918010003', '01714384049'],
            ['Laila Nasrin', '918010004', '01767222315'],
            ['Jannatun Ferdaswshi', '918010005', '01750965076'],
            ['Asrafun Naher', '918010006', '01737797936'],
            ['Sanjida Nasrin', '918010007', '01775883886'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Jatanpkuri Government Primary School';
        $address = 'Jatanpukuri, Dhakkamara, Panchagarh Sadar, Panchagarh';
        $code = '91101040802';
        $data = [
            ['Most. Monzura Begum', '918020001', '01733775828'],
            ['Most. Mahfuza Begum', '918020002', '01715672154'],
            ['Most. Shefali Begum', '918020003', '01722996392'],
            ['Nusrat Jahan', '918020004', '01722894131'],
            ['Qaema Begum', '918020005', '01788025952'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mirgarh Government Primary School';
        $address = 'Mirgarh, Dhakkamara, Panchagarh';
        $code = '91101040803';
        $data = [
            ['Md. Murazam', '918030001', '01745382951'],
            ['Mst. Afroza Banu', '918030002', '01746255747'],
            ['Md. Ataur Rahman', '918030003', '01744466667'],
            ['Mst. Selina Aktar', '918030004', '01755422580'],
            ['Mst. Lutfa Parvin', '918030005', '01732063681'],
            ['Mst. Aklima Aktar', '918030006', '01723951515'],
            ['Md. Shahajul Islam', '918030007', '01737891733'],
            ['Mossa. Ramjina Akter', '918030008', '01740358746'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Gaihata Government Primary School';
        $address = 'Gaighata, Dhakkamara, Panchagarh';
        $code = '91101040808';
        $data = [
            ['Md. AMinul Islam', '9180810001', '01764967233'],
            ['Md. Washemuzzaman', '918081002', '01961460169'],
            ['Md. Rabiul Alam', '918081003', '01717849610'],
            ['Md. Ariful Islam', '918081004', '01722760790'],
            ['Surovi Jannat', '918081005', '01737767795'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Omarkhana Government Primary School';
        $address = 'Omarkhana, Dhakkamara, Panchagarh.';
        $code = '99101040802';
        $data = [
            ['Md. Jabedul Islam', '998020001', '01719668100'],
            ['Md. Abu Hossen', '998020002', '01797938098'],
            ['Md. Tofayel Alam', '998020003', '01723655323'],
            ['Md. Abdul Bari', '998020004', '01741077776'],
            ['Most. Shahera Begum', '998020005', '01716424079'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Baganbari Government Primary School';
        $address = 'Baganbari, Dhakkamara, Panchagarh';
        $code = '99101040809';
        $data = [
            ['Mst. Aysha Siddika', '998090001', '01724309029'],
            ['Md. Rosiddujjaman', '998090002', '01740278388'],
            ['Jiteudranath Borman', '998090003', '01724660806'],
            ['Nurun Nahar Khatun', '998090004', '01710288046'],
            ['Most. Rickta Begum', '998090005', '01792814857'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Domoni Sarker Para Government Primary School';
        $address = 'Domoni Sarker Para, Dhakkamara, Panchagarh';
        $code = '99101040803';
        $data = [
            ['Most. Fozilatun Noor', '998030001', '01741061342'],
            ['Sahida Begum', '998030002', '01744976705'],
            ['Most. Jesmin Akter', '998030003', '01764979315'],
            ['Mozida Begum', '998030004', '01783140501'],
            ['Arzina Begum', '998030005', '01818618636'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Maladam Shishau Shikkha Government Primary School';
        $address = 'Maladam, Dhakkamara, Panchagarh.';
        $code = '99101040801';
        $data = [
            ['Md. Amzad Ali Sarkar', '998010001', '01736232500'],
            ['Prasanna Kumar Roy', '998010002', '01710927222'],
            ['Bilas Chandra Roy', '998010003', '01739262714'],
            ['Fardousara', '998010004', '01786945494'],
            ['Most. Shahinur Begum', '998010005', '01763115408'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mirgar Pochimpara Government Primary School';
        $address = 'Mirgar Pochimpara, Dhakkamara, Panchagarh.';
        $code = '99101040808';
        $data = [
            ['Md. Hamidullah', '998080001', '01728867634'],
            ['Salina Aktar', '998080002', '01736817020'],
            ['Yesmin Begum', '998080003', '01773309502'],
            ['Khaleda Begum', '998080004', '01796868024'],
            ['Marjena Khatun', '998080005', '01*********'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Purboshikerpur Government Primary School';
        $address = 'Purboshikerpur, Dhakkamara, Panchagarh';
        $code = '99101040812';
        $data = [
            ['Ferdowsi Jesmin Paadhan', '998120001', '01719667165'],
            ['Md. Hakikul Islam', '998120002', '01724509101'],
            ['Most. Bashura Begum', '998120003', '01750323043'],
            ['Jesmin Naher', '998120004', '01747485238'],
            ['Most. Asma Prodhan', '998120005', '01737987781'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Satny Tangonmary Government Primary School';
        $address = 'Satany Tangonmary, Dhakkamara, Panchagarh.';
        $code = '99101040805';
        $data = [
            ['Md. Robiul Alam', '998080001', '01735643157'],
            ['Md. Saiful Islma', '998080002', '01741459479'],
            ['Sahen Chandra Roy', '998080003', '01738771097'],
            ['Most. Bilkis Fatema', '998080004', '01825944305'],
            ['Most. Farjana Aktar', '998080005', '01737095325'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Talipara Hatiar Dhanga Government Primary School';
        $address = 'Talipara, Dhakkamara, Panchagarh.';
        $code = '99101040810';
        $data = [
            ['Md. Shamser Ali', '998100001', '01725741858'],
            ['Md, Faijul Islam', '998100002', '01791648722'],
            ['Md. Nurul Islam Sarkar', '998100003', '01722923777'],
            ['Md. Mofidar Rahman', '998100004', '01706808837'],
            ['Most. Alpona Akther', '998100005', '01751120076'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mali Para Government Primary School';
        $address = 'Mali Para, Dhakkamara, Panchagarh.';
        $code = '99101040807';
        $data = [
            ['Md. Mizanur Rahaman', '998070001', '01734871375'],
            ['Md. Golam Rabbani', '998070002', '01761026279'],
            ['Farhana Afroj', '998070003', '01762935920'],
            ['Esmita Sharmin', '998070004', '01722840570'],
            ['Kohinur Begum', '998070005', '01755426292'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Amtola Government Primary School';
        $address = 'Amtola, Dhakkamara, Panchagarh.';
        $code = '99101040811';
        $data = [
            ['Md. Lotiful Islam', '998110001', '01780525089'],
            ['Md. Rofiqul Islam', '998110002', '01739947749'],
            ['Most. Ferdowsi Jahan', '998110003', '01719088522'],
            ['Mst. Tanjina Easmin', '998110004', '01717506642'],
            ['Md. Mortuza Ali', '998110005', '01744252050'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {       
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::DHAKKAMARA,
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
