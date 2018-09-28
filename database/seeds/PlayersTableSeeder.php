<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('players')->delete();
        
        \DB::table('players')->insert(array (
            0 => 
            array (
                'id' => '1',
                'team_id' => '0',
                'first_name' => 'Bill',
                'last_name' => 'Henson',
                'created_at' => '2018-09-27 17:33:57',
                'updated_at' => '2018-09-27 19:19:39',
            ),
            1 => 
            array (
                'id' => '2',
                'team_id' => '2',
                'first_name' => 'AAA',
                'last_name' => 'eEEE',
                'created_at' => '2018-09-27 17:34:07',
                'updated_at' => '2018-09-27 19:24:08',
            ),
            2 => 
            array (
                'id' => '3',
                'team_id' => '0',
                'first_name' => 'd',
                'last_name' => 'f',
                'created_at' => '2018-09-27 17:34:13',
                'updated_at' => '2018-09-27 17:34:13',
            ),
            3 => 
            array (
                'id' => '4',
                'team_id' => '2',
                'first_name' => 'John',
                'last_name' => 'Jons',
                'created_at' => '2018-09-27 17:34:23',
                'updated_at' => '2018-09-27 19:19:20',
            ),
            4 => 
            array (
                'id' => '5',
                'team_id' => '2',
                'first_name' => 'Tim',
                'last_name' => 'Smith',
                'created_at' => '2018-09-27 17:35:47',
                'updated_at' => '2018-09-27 19:19:50',
            ),
        ));
        
        
    }
}