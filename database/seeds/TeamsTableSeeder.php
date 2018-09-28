<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Detroit Lions',
                'created_at' => '2018-09-27 17:00:46',
                'updated_at' => '2018-09-27 17:00:46',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Arizona Cardinals',
                'created_at' => '2018-09-27 17:01:59',
                'updated_at' => '2018-09-27 17:01:59',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Buffalo Bills',
                'created_at' => '2018-09-27 17:03:07',
                'updated_at' => '2018-09-27 17:03:07',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'New England Patriots',
                'created_at' => '2018-09-27 17:03:29',
                'updated_at' => '2018-09-27 17:03:29',
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Green Bay Packers',
                'created_at' => '2018-09-27 17:09:22',
                'updated_at' => '2018-09-27 17:09:22',
            ),
        ));
        
        
    }
}