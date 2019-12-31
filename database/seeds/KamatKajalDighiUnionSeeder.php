<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class KamatKajalDighiUnionSeeder extends Seeder
{
    const KAMATKAJOL = 8;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
        $name = 'Borodoho Government Primary School';
        $address = 'Diabari Tunirhat, Kamat Kajal Dhighi, Panchagarh.';
        $code = '91101040401';
        $data = [
            ['Sabina Yeasmin', '914010001', '01731331979'],
            ['Mst. Sharifa Begum', '914010002', '01930316366'],
            ['Mst. Dulara Akther Khanam', '914010003', '01723100236'],
            ['Mst. Farhana Najnin Ferdoushi', '914010004', '01724677521'],
            ['Khadija Pervin', '914010005', '01721022705'],
            ['Satra Sen Roy', '914010006', '01719539879'],
            ['Safaly Rani Roy', '914010007', '01757686352'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Goleha Government Primary School';
        $address = 'Golehapara Thunirhat, Kamat Kajal Dhighi, Panchagarh.';
        $code = '91101040402';
        $data = [
            ['Md. Abdul Kharim', '914020001', '01739961375'],
            ['Mst. Tanzina Banu', '914020002', '01744503457'],
            ['Mst. Anuman Ara AKhter', '914020003', '01833610418'],
            ['Hossena Md. Soharawardi Sarkar', '914020004', '01717749838'],
            ['Asma Khatun', '914020005', '01722050527'],
            ['Halima khatun', '914020006', '01764714405'],
            ['Sultana Jesmin', '914020007', '01722658668'],
            ['Mst. Wahida Begum', '914020008', '01737566208'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'K K Kajol Dighi Government Primary School';
        $address = 'Mondolpara, Kamat Kajol Dighi, Panchagarh Sadar, Panchagarh.';
        $code = '91101040403';
        $data = [
            ['Md. Shah Alam', '914030001', '01714693149'],
            ['Md. Atikur Rahman', '914030002', '01925882880'],
            ['Touhida Minara', '914030003', '01744406801'],
            ['Rabindranath Bormon', '914030004', '01755462019'],
            ['Md. Kharshed Alam', '914030005', '01725741179'],
            ['Md. Khadamul Islam', '914030006', '01729617143'],
            ['Rawojatul Zannat', '914030007', '01744453556'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Kazol Dhigi Government Primary School';
        $address = 'Tunirhat, Kamat Kajal Dhighi, Panchagarh.';
        $code = '91101040404';
        $data = [
            ['Momtaz Begum', '914040001', '01731931728'],
            ['Anjuman Prodhan', '914040002', '01727847272'],
            ['Bashir Uddin', '914040003', '01717536823'],
            ['Abeda Khatun', '914040004', '01745082828'],
            ['Umma Hafsa-Al-Jinea', '914040005', '01796068632'],
            ['Sharmin AKter', '914040006', '01797938117'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Shipaipara-1 Government Primary School';
        $address = 'Shipairara, Kamat Kajal Dhighi, Panchagarh Sadar, Panchagarh.';
        $code = '91101040405';
        $data = [
            ['Md. Sultan Ali', '914050001', '01712361883'],
            ['Mohammad Ali', '914050002', '01712472830'],
            ['Akterruzzaman', '914050003', '01722357344'],
            ['Selina Akter', '914050004', '01737937747'],
            ['Rahima Akter', '914050005', '01738036856'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Gwalpara Government Primary School';
        $address = 'Gowalpara Tunirhat, Kamat Kajal Dhighi, Panchagarh.';
        $code = '99101040401';
        $data = [
            ['Md. Touhinur Alam', '994010001', '01721459806'],
            ['Jinnatun Nehar', '994010002', '01774038353'],
            ['Md. Raziur Rahman', '994010003', '01729115681'],
            ['Rathindra Nath Gop', '994010004', '01725931647'],
            ['Md. ALi-Mortuga', '994010005', '01751951926'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mazspara Government Primary School';
        $address = 'Ghatbar Tunirhat, Kamat Kajal Dhighi, Panchagarh.';
        $code = '99101040403';
        $data = [
            ['Shafali Begum', '994030001', '01737797823'],
            ['Md. Monowar Hossain', '994030002', '01731256264'],
            ['Md. Safiul Alam', '994030003', '01710606622'],
            ['Rabaka Sultant', '994030004', '01723813564'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Choch Para Government Primary School';
        $address = 'Choch Para, Kamat Kajal Dhighi, Panchagarh Sadar, Panchagarh.';
        $code = '99101040405';
        $data = [
            ['Md. Malekul Islam', '994050001', '01710048714'],
            ['Mst. Khalequn Nehar', '994050002', '01737096989'],
            ['Mst. Mahmuda Begum', '994050003', '01761011258'],
            ['Md.Monsura Alam', '994050004', '01754056630'],
            ['Md. Kamrun Nahar', '994050005', '01750217775'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Barobari Government Primary School';
        $address = 'Barodha, Kamat Kajal Dighi, Panchagarh.';
        $code = '99101040406';
        $data = [
            ['Narul Islam', '994060001', '01765750241'],
            ['Monira Begum', '994060002', '01717785944'],
            ['Md. Mostafizur Rahman', '994060003', '01737071297'],
            ['Amina Khatun', '994060004', '01783112209'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Ghagra Khocha Bari Government Primary School';
        $address = 'Ghagra Khocha Bari, Kamat Kajal Dhighi, Panchagarh.';
        $code = '99701049006';
        $data = [
            ['Rostom Ali', '999006001', '01725890365'],
            ['Taslima Begum', '999006002', '01774413747'],
            ['Palsh Chandra Roy', '999006003', '01734570812'],
            ['Mst. Khukumoni Afrin', '999006004', '01737823571'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Bwalmari Government Primary School';
        $address = 'Bowalmari, Kamatkagal Dhigi, Panchagarh Sadar, Panchagarh.';
        $code = '99101040404';
        $data = [
            ['Md. Masrullah', '991040001', '01755468612'],
            ['Shakina Begum', '991040002', '01761140270'],
            ['Porimol Chandra', '991040003', '01727289094'],
            ['Most. Kahinor Begum', '991040004', '01723891963'],
            ['Sanjita', '991040005', '01738517944'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {       
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::KAMATKAJOL,
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
