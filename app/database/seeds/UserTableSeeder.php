<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $names = array(
            array('tamina', 'protestgrainexceed'),
            array('thomas', 'confusecertainsocial'),
            array('josh', 'recognizelovelyprotest'),
            array('cathy', 'novelwallmetre'),
            array('barry', 'ablecycleruling'),
            array('barry', 'requireillcover'),
            array('steve', 'conceptfavourseek'),
            array('mark', 'lunchpacemaker'),
            array('kate', 'beatnearplan'),
            array('bloyfamily', 'lastfurniturefinance'),
            array('investor', 'fantasyremainmyth')
            );
        foreach ($names as $name){
    
            $user = new User;

            $user->fill(array(
            	'username' => $name[0],
            	));

           	$user->password = Hash::make($name[1]);

           	$user->save();
        }   
            
        }

}