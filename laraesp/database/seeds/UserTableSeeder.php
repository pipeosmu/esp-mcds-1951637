<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = new User;

        $usr->name = 'Andres Felipe';
        $usr->email = 'pipe96-17@hotmail.com';
        $usr->password = bcrypt('admin');
        $usr->birthdate = '1990-08-20';
        $usr->gender = 'male';
        // $usr->photo = 'imgs/photos/pipe.png';
        $usr->role = 'Admin';
        $usr->save();

        User::create(array(

            'name' => 'Homero Simpson',
            'email' => 'homero@gmail.com',
            'password' => bcrypt('admin123'),
            'birthdate' => '1996-02-17',
            'gender' => 'male'
        ));



        //Factory

        factory(User::class, 100)->create();

    }
}
