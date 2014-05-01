<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'gdfaubion@gmail.com';
        $user->password = Hash::make('DownloadCodeDaily9004!');
        $user->first_name = 'Grace';
        $user->last_name = 'Faubion';
        $user->save();
    }

}

?>