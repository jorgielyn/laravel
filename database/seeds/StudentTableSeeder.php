<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            array(
             array('name' => 'muang','username' => 'buang','password' => 'yabag'),
            
            )
            );
        
    }
}
