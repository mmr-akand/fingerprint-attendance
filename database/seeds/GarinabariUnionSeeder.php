<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class GarinabariUnionSeeder extends Seeder
{
    const GARINABARI = 5;
     
    public function run()
    {                
        $name = 'Jitapara Government Primary School';
        $address = 'Jitapara, Gorinabari, Panchagarh';
        $code = '91101041007';
        $data = [
            ['Md. Abdus Sobhan', '911007001', '01717976967'],
            ['Sangida Khanum', '911007002', '01717977020'],
            ['Shahnewas Begum', '911007003', '01796174111'],
            ['Orjona Rani Dhar', '911007004', '01728040460'],
            ['Asma AKter Subarna', '911007005', '01719470173'],
            ['Nipa Islam', '911007006', '01722679646'],
            ['Rokshana', '911007007', '01737943869'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Kashimpur Government Primary School';
        $address = 'Kashimpur, Gorina Bari, Panchagarh';
        $code = '99701049001';
        $data = [
            ['Md. Golam Kader', '994900101', '01737564731'],
            ['Md. Ariful Haque', '994900102', '01722865093'],
            ['Most. Rokeya Begum', '994900103', '01740076542'],
            ['Most. Hasina Banu', '994900104', '01724946491'],
            ['Md. Nayem Habib', '994900105', '01710565873'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Uttar Thatpara Government Primary School';
        $address = 'Uttar Thatpara, Gorina Bari, Panchagarh';
        $code = '99101041003';
        $data = [
            ['Shabina Yesmin Amin', '991003001', '01745782980'],
            ['Md. Azizar Rhaman', '991003002', '01785421574'],
            ['Md. Abul Kalam Azad', '991003003', '01734486996'],
            ['Md. Golam Mostafa', '991003004', '01793969479'],
            ['Md. Mahtab Uddin', '991003005', '01793060815'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Goleha Kantomoni Government Primary School';
        $address = 'Goleha Kantomon, Gorinabari, Panchagarh Sadar, Panchagarh';
        $code = '91101041006';
        $data = [
            ['Md. Sahjahan Ali', '911006001', '01735480308'],
            ['Mst. Suraya Begum', '911006002', '01734059855'],
            ['Mochha Mahmuda Begum', '911006003', '01739210317'],
            ['Mst. Rashida Parvin', '911006004', '01710239105'],
            ['Most. Suraiya Begum', '911006005', '01734804912'],
            ['Ashma Akter', '911006006', '01724035486'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mistri Para Government Primary School';
        $address = 'Mistri Para, Gorinabari, Panchagarh';
        $code = '991014041008';
        $data = [
            ['Mir. Md. Alamgir Badshah', '991008001', '01721917327'],
            ['Md. Taijuddin', '991008002', '01746444205'],
            ['Md. Mozammel Hoque', '991008003', '01762963433'],
            ['Md. Masud Faisal', '991008004', '01714605967'],
            ['Md. Ali Zinnah', '991008005', '01723758016'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Chikon Mati Government Primary School';
        $address = 'Chikon Mati, Gorinabari, Panchagarh.';
        $code = '91101041002';
        $data = [
            ['Md. Nasirul Islam', '911002001', '01760586643'],
            ['Md. Abue Bakar Siddique', '911002002', '01710044717'],
            ['Md. Shahajul Islam Sarker', '911002003', '01780928339'],
            ['Md. Zahangir Ali', '911002004', '01721877614'],
            ['Md. Lutfor Rahaman', '911002005', '01721460630'],
            ['Shahanaj Pirvin', '911002006', '01791845701'],
            ['Sazia Afrin', '911002007', '01773766701'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Dokkhin Kashimpur Government Primary School';
        $address = 'Kashimpur, Gorina Bari, Panchagarh.';
        $code = '99101041006';
        $data = [
            ['Md. Mohsin Ali', '991006001', '01743405041'],
            ['Md. Boshir Alam', '991006002', '01794846773'],
            ['Most. Bilkis Begum', '991006003', '01797679142'],
            ['Md. Abu Bakkar Siddique', '991006004', '01738539497'],
            ['Salina Akter', '991006005', '01717651119'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Shik Para Dangabari Government Primary School';
        $address = 'Dangabari, Gorina Bari, Panchagarh.';
        $code = '99101041007';
        $data = [
            ['Md. Golam Mostafa', '991007001', '01797938015'],
            ['Most. Tahera Begum', '991007002', '01758038810'],
            ['Most. Shanawaj Parvin', '991007003', '01705911734'],
            ['Most. Johura Begum', '991007004', '01737835948'],
            ['Most. Nurjahan Begum', '991007005', '01737891733'],
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
           'union_id' => self::GARINABARI,
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
