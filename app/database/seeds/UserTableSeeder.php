<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $names = array(
            array('tamina', 'protestgrainexceed', 'admin'),
            array('thomas', 'confusecertainsocial', 'admin'),
            array('josh', 'recognizelovelyprotest', 'admin'),
            array('cathy', 'novelwallmetre', 'standard'),
            array('barry', 'ablecycleruling', 'standard'),
            array('barry', 'requireillcover', 'standard'),
            array('steve', 'conceptfavourseek', 'standard'),
            array('mark', 'lunchpacemaker', 'standard'),
            array('kate', 'beatnearplan', 'standard'),
            array('bloyfamily', 'lastfurniturefinance', 'standard'),
            array('investor', 'fantasyremainmyth', 'standard')
            );
        foreach ($names as $name){
    
            $user = new User;

            $user->fill(array(
            	'username' => $name[0],
                'role'=> $name[2]
            	));

           	$user->password = Hash::make($name[1]);

           	$user->save();
        }   
            
        }

}