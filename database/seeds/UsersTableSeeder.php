<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
       $user = App\User::create([

            'name' => 'Idongesit Utong',

            'email' => 'idee@gmail.com',

            'password' => bcrypt('01234567'),

            'admin'=> 1
        ]);
   
        App\Profile::create([

           'user_id' => $user->id,

           'avatar' => 'uploads/avatars/avatar.png',

           'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',

           'facebook' => 'facebook.com',
           
           'youtube' => 'youtube.com'


        ]);
    }
}
