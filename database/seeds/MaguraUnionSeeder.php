<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class MaguraUnionSeeder extends Seeder
{
    const MAGURA = 9;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {              
        $name = 'Magura Prodhan Para Government Primary School';
        $address = 'Prodhan Para, Magura, Panchagarh.';
        $code = '91101040901';
        $data = [
            ['Md. Ayub Ali Prodhan', '919010001', '01716456926'],
            ['Miss. Masuda Parven', '919010002', '01723713877'],
            ['Shamsun Nahar', '919010003', '01762970414'],
            ['Md. Harun-Or-Rashid', '919010004', '01734106241'],
            ['Md. Habibur Rahman', '919010005', '01724044503'],
            ['Mist. Tanziba Zerin', '919010006', '01840330779'],
            ['Md. Wakiluzzaman Shohag', '919010007', '01751007666'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Rajoli Para Government Primary School';
        $address = 'Rojoli Para, Magura, Panchagarh.';
        $code = '91101040502';
        $data = [
            ['Arpana Rani Roy', '915020001', '01717849262'],
            ['Momotaz Khatun', '915020002', '01796821655'],
            ['Most. Azmeri Khanam', '915020003', '01760580042'],
            ['Khadijatul Kubra', '915020004', '01761351356'],
            ['Umma Asma Begum', '915020005', '01737624017'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Amlahar Government Primary School';
        $address = 'Amlahar, Magura, Panchagarh Sadar, Panchagarh.';
        $code = '91101040903';
        $data = [
            ['Md. Makbul Hossain', '919030001', '01723758300'],
            ['Most. Nadira Jahan', '919030002', '01737050761'],
            ['Most. Najmun Naher', '919030003', '01737841790'],
            ['Lalita Bala', '919030004', '01738733828'],
            ['Most. Sultana Rajiea', '919030005', '01750246589'],
            ['Most. Yesmin Ara', '919030006', '01743322096'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Lakheraj Ghumty Government Primary School';
        $address = 'Lahkeraj Ghumty, Magura, Panchagarh Sadar, Panchagarh.';
        $code = '91101040902';
        $data = [
            ['Md. Yaqub Ali', '919020001', '01713749267'],
            ['Maya Begum', '919020002', '01719476783'],
            ['Laily Begum', '919020003', '01796588916'],
            ['Herandranoth Roy', '919020004', '01719471364'],
            ['Zakia Sultana Jesmin', '919020005', '01737749706'],
            ['Md. Anwar Hossen', '919020006', '01825400117'],
            ['Papri Roy', '919020007', '01732098985'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Magura Kaleshwar Government Primary School';
        $address = 'Kaleshwar, Magur, Panchagarh Sadar, Panchagarh.';
        $code = '99101040903';
        $data = [
            ['Md. Gias Uddin', '999030001', '01716556910'],
            ['Protulla Kumar Roy', '999030002', '01767504025'],
            ['Chain Barmon', '999030003', '01738733327'],
            ['Most. Monsura Begum', '999030004', '01728502228'],
            ['Mst. Monowara Begum', '999030005', '01774129666'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Telipara Government Primary School';
        $address = 'Telipara, Magura, Panchagarh.';
        $code = '99101040906';
        $data = [
            ['Abdur Rahman', '999060001', '01788146388'],
            ['Ismail Hossain', '999060002', '01718911157'],
            ['Gunodhar Roy', '999060003', '01724678914'],
            ['Renu Rani', '999060004', '01751389160'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Dhonipara Government Primary School';
        $address = 'Dhonipara, Magura, Panchagarh.';
        $code = '99101040905';
        $data = [
            ['Ummey Ayesha Siddiqua', '999050001', '01776909940'],
            ['Tajmin Nuri', '999050002', '01710855111'],
            ['Suraiya Alam', '999050003', '01792946951'],
            ['Sabrin Afroz', '999050004', '01755496873'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Puradanga Government Primary School';
        $address = 'Pruadanga, Magura, Panchagarh.';
        $code = '99101040904';
        $data = [
            ['Md. Shofiqul Islam', '999040001', '01723226109'],
            ['Md. Golam Rabbani', '999040002', '01737797934'],
            ['Md. Rafiqul Islam', '999040003', '01796030305'],
            ['Tara Bala Roy', '999040004', '01737001028'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Sipahi Hat Government Primary School';
        $address = 'Sipahi Hat, Magura, Panchagarh.';
        $code = '99101040907';
        $data = [
            ['Rabeya Khatun', '999070001', '01729616130'],
            ['Naba Ranjan Roy', '999070002', '01742194106'],
            ['Sabeded Bala', '999070003', '01751029904'],
            ['Monka Rani', '999070004', '01722286997'],
            ['Morioum begum', '999070005', '01758038819'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Magura Baro Patiya Government Primary School';
        $address = 'Baropatiya, Magura, Panchagarh.';
        $code = '99101040901';
        $data = [
            ['Indro Mohon Roy', '999010001', '01750204989'],
            ['Dhanesh Chandra Roy', '999010002', '01729116510'],
            ['Md. Hafiz Uddin', '999010003', '01719542514'],
            ['Md. Ansrul Islam Prodhan', '999010004', '01723758091'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Banpara Riverview Government Primary School';
        $address = 'Banpara Riverview Government Primary School';
        $code = '99101040908';
        $data = [
            ['Md. Mosharral Hossain', '999080001', '01727246587'],
            ['Champa Rani', '999080002', '01738001500'],
            ['Ranjana Rani Roy', '999080003', '01728707154'],
            ['Most. Rumana Akter', '999080004', '01767175029'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Pach Mahena Government Primary School';
        $address = 'Pach Mahena, Magura, Panchagarh.';
        $code = '99101040902';
        $data = [
            ['Md. Doshirul Islam', '999020001', '01727823349'],
            ['Md. Hasibul Alam', '999020002', '01725233192'],
            ['Binod Kumar Roy', '999020003', '01722357329'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Sipai Para-2 Government Primary School';
        $address = 'Sipai Para, Magura, Panchagarh Sadar, Panchagarh.';
        $code = '91101040904';
        $data = [
            ['Arfin Ara Akter', '919040001', '01724678536'],
            ['Lalita Rani Roy', '919040002', '01785450872'],
            ['K.H.M. Latifur Rahman', '919040003', '01719431843'],
            ['Momota Khatun', '919040004', '01734344150'],
            ['Afroja Begum', '919040005', '0180570841'],
            ['Most. Hasna Hena', '919040006', '01705842121'],
            ['Jharna Rani Sarma', '919040007', '01773009141'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Noyoni Buruz Dighal Gram Government Primary School';
        $address = 'Dighal Gram, Magura, Panchagarh.';
        $code = '701049004';
        $data = [
            ['Aysha Shiddika', '709004001', '*********'],
            ['Mst. Lily Akthar', '709004002', '01797654091'],
            ['Md. Azam Ali Prodhan', '709004003', '01737602970'],
            ['Md. Abul Kalam Azad Prodhan', '709004004', '01745475826'],
            ['Md. Mizanur Rahaman', '709004005', '01737894683'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'K.R.S. Magura Sarkar Para Government Primary School';
        $address = 'Sarkar Para, Magura, Panchagarh';
        $code = '701041581';
        $data = [
            ['Md. Ahsan Habib', '705810001', '01718970776'],
            ['Shah Imran Mohammad Harun-Ur-Rashid', '705810002', '01737369444'],
            ['Monira Ferdosh Tanha', '705810003', '01755340030'],
            ['Mukti Rani Roy', '705810004', '01744478804'],
            ['Protima Rany', '705810005', '01740108682'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Ayma Jhalay Government Primary School';
        $address = 'Jhalay, Magura, Panchagarh.';
        $code = '91101040906';
        $data = [
            ['Selina Begum', '919060001', '01717676766'],
            ['Md.Mahbub Alam Prodhan', '919060002', '01722251033'],
            ['Bithika Rani', '919060003', '01738431358'],
            ['Hasina Begum', '919060004', '01738152361'],
            ['Hosneara Begum', '919060005', '01771352272'],
            ['Mst. Habiba Khanam', '919060006', '01734444145'],
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
           'union_id' => self::MAGURA,
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
