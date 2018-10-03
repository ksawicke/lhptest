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
                'id' => 2,
                'team_id' => 33,
                'first_name' => 'Budda',
                'last_name' => 'Baker',
                'created_at' => '2018-10-02 17:23:30',
                'updated_at' => '2018-10-02 17:34:54',
            ),
            1 => 
            array (
                'id' => 3,
                'team_id' => 33,
                'first_name' => 'Bene\'',
                'last_name' => 'Benwikere',
                'created_at' => '2018-10-02 17:23:55',
                'updated_at' => '2018-10-02 17:23:55',
            ),
            2 => 
            array (
                'id' => 4,
                'team_id' => 33,
                'first_name' => 'Antoine',
                'last_name' => 'Bethea',
                'created_at' => '2018-10-02 17:24:47',
                'updated_at' => '2018-10-02 17:24:47',
            ),
            3 => 
            array (
                'id' => 5,
                'team_id' => 33,
                'first_name' => 'Tre',
                'last_name' => 'Boston',
                'created_at' => '2018-10-02 17:24:59',
                'updated_at' => '2018-10-02 17:24:59',
            ),
            4 => 
            array (
                'id' => 6,
                'team_id' => 33,
                'first_name' => 'Sam',
                'last_name' => 'Bradford',
                'created_at' => '2018-10-02 17:25:13',
                'updated_at' => '2018-10-02 18:35:22',
            ),
        ));
        
        
    }
}