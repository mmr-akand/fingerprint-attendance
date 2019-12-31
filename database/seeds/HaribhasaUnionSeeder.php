<?php

use Illuminate\Database\Seeder;
use App\TeacherProfile as Tchr;
use App\School;
use App\User;

class HaribhasaUnionSeeder extends Seeder
{
    const HARIBHASA = 7;
     
    public function run()
    {     
        $name = 'Mohammadpur GPS Government Primary School';
        $address = 'Mohanzar, Harivasha, Panchagarh.';
        $code = '101040706';
        $data = [
            ['Md. Kamruzzaman Prodhan', 000000000, '01723506078'],
            ['Rahena Begum', 000000000, '01704322766'],
            ['Md. Hasibul Islam', 000000000, '01860062347'],
            ['Sapan Kumar Sen', 000000000, '01728359557'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Baliadangi L.S.S Government Primary School';
        $address = 'Baliadangi, Harivasha, Panchagarh.';
        $code = '99101040707';
        $data = [
            ['Md. Anwarul islam', '997070001', '01719513119'],
            ['Jahanara Akter', '997070002', '01774494603'],
            ['Asma Begum', '997070003', '01773568950'],
            ['Marzina Begum', '997070004', '01737641326'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Uttar Prodhan Para Government Primary School';
        $address = 'Uttar Prodhan Para, Harivasha, Panchagarh.';
        $code = '701049005';
        $data = [
            ['Mst. Farida Akther', '900500001', '01710214361'],
            ['Mst. Diljan Begum', '900500002', '01750073706'],
            ['Md. Hasen Ali', '900500003', '01727374121'],
            ['Mst. Tohomina Begum', '900500004', '01736233361'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Goich Para Government Primary School';
        $address = 'Goich Para, Harivasa, Panchagarh.';
        $code = '101040708';
        $data = [
            ['Md. Abul Kasem', '708000001', '01788209364'],
            ['Flora Nazmin', '708000002', '01767432899'],
            ['Khaza Fokhor Uddin Ali Ahmed', '708000003', '01724346852'],
            ['Mst. Rahima Begum', '708000004', '01765941714'],
            ['Md. Abu Satter', '708000005', '01725132603'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Mohin Pur Government Primary School';
        $address = 'Mahan para, Harivahsa, Panchagarh.';
        $code = '99101040704';
        $data = [
            ['Md. Abu Hanif', '704000001', '01723532633'],
            ['Md. Kashem Ali', '704000002', '01767324145'],
            ['Md. Aibul Haque', '704000003', '01783214620'],
            ['Most. Umme Monj Ara Begum', '704000004', '01780744323'],
            ['Md. Mijanur Rahman', '704000005', '01737162329'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Dabor Vanga Government Primary School';
        $address = 'Dabor Vanga, Harivasha, Panchagarh.';
        $code = '101040701';
        $data = [
            ['Tripti Rani', '701000001', '01731171002'],
            ['Bilkis Parvin', '701000002', '01721313699'],
            ['Tasmira Begum', '701000003', '01796102617'],
            ['Wbaidul Badshah', '701000004', '01314161928'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Harivasa Government Primary School';
        $address = 'Harivasa, Panchagarh.';
        $code = '91101040703';
        $data = [
            ['Md. Matiar Rahman', '703000001', '01735562408'],
            ['Md. Tauhid Noor Islam', '703000002', '01718879566'],
            ['Morjina Begum', '703000003', '01740877733'],
            ['Shahanaj Parvin', '703000004', '01737118068'],
            ['Shamsun Nehar', '703000005', '01915858595'],
            ['Sazeda Begum', '703000006', '01774374929'],
            ['Jakia Azmain', '703000007', '01787984342'],
            ['Shaida Begum', '703000008', '01724095160'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Bosuniapara Government Primary School';
        $address = 'Bosuniapara, Harivasha, Panchagarh.';
        $code = '91101040704';
        $data = [
            ['Most. Saleha Nure Tazmi', '917040001', '01710869418'],
            ['Md. Abdur Rahim', '917040002', '01762711019'],
            ['Md. Nur Islam', '917040003', '01710774518'],
            ['Arfin Akter', '917040004', '01751344539'],
            ['Nasima Akter', '917040005', '01738434447'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Dhangipukuri Government Primary School';
        $address = 'Dhangipukuri, Harivasha, Panchagarh.';
        $code = '101040705';
        $data = [
            ['Md. Anwar Hossain', '705000001', '01721899008'],
            ['Shahina Parvin', '705000002', '01751351131'],
            ['Md. ABul Kasem', '705000003', '01756762673'],
            ['Bina Rani Roy', '705000004', '01719041948'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Bangal Para Government Primary School';
        $address = 'Bangal Para, Harivasha, Panchagarh.';
        $code = '99101040701';
        $data = [
            ['Md. Rafizul Haque', '997010001', '01793243770'],
            ['Md. Kawsar Alam Kazi', '997010002', '01735961515'],
            ['Md. Zakir Hossain Prodhan', '997010003', '01723533433'],
            ['Mst. Anowara Begum', '997010004', '01706756758'],
            ['Md. Nazimul Islam', '997010005', '01734345176'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Yeer Para Government Primary School';
        $address = 'Yeer Para, Harivasha, Panchagarh.';
        $code = '101040702';
        $data = [
            ['Md. Shah Jahan', '702000001', '01736019136'],
            ['Md. Nazrul islam', '702000002', '01723758087'],
            ['Md. Abul Hossain', '702000003', '01734683053'],
            ['Md. Saifur Rahman Prodhan', '702000004', '01719471929'],
            ['Md. Ajaharul Islam', '702000005', '01738636091'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Ghagra Para Government Primary School';
        $address = 'Ghagra Para, Harivasha, Panchagarh.';
        $code = '99101040703';
        $data = [
            ['Md. Haniful Islam', '997030001', '01788231073'],
            ['Mst. Nur Aysha Begum', '997030002', '01737647943'],
            ['Md. Ziaul Haque', '997030003', '01723429297'],
            ['Mst. Lovely Begum', '997030004', '01705842099'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);

        
        $name = 'Danga Para Government Primary School';
        $address = 'Danga Para, Harivasha, Panchagarh.';
        $code = '99101040705';
        $data = [
            ['Md. Abul Hayat', '997050001', '01713716547'],
            ['Md. Shamsul Alam', '997050002', '01937141708'],
            ['Sirazum Monira', '997050003', '01704273635'],
            ['Mst. Fatema Begum', '997050004', '01771398014'],
            ['Arifatul Shilpi', '997050005', '017********'],
        ];
        $this->storeSchoolAndTeachers($name, $address, $code, $data);
    }

    public function storeSchoolAndTeachers($name, $address, $code, $data)
    {       
        $school = School::create([
           'name' => $name,
           'address' => $address,
           'deviceid' => $code,
           'union_id' => self::HARIBHASA,
           'upazila_id' => 1,
           'profile_teo_id' => 1
        ]);

        $user = Sentinel::registerAndActivate([
            'name' => $data[0][0], 'phone' => $data[0][2], 'password' => substr($data[0][2], -6)
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
