<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(

            'name'  =>'Admin',
            'email' =>'adminveterinaria@ubb.cl',
            'password'  =>  \Hash::make('admin321')

        ));
    }

}
