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
                'id' => 1,
                'name' => 'Detroit Lions',
                'created_at' => '2018-10-02 16:42:57',
                'updated_at' => '2018-10-02 16:42:57',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Atlanta Falcons',
                'created_at' => '2018-10-02 16:43:33',
                'updated_at' => '2018-10-02 16:43:33',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Baltimore Ravens',
                'created_at' => '2018-10-02 16:43:42',
                'updated_at' => '2018-10-02 16:43:42',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Buffalo Bills',
                'created_at' => '2018-10-02 16:43:50',
                'updated_at' => '2018-10-02 16:43:50',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Carolina Panthers',
                'created_at' => '2018-10-02 16:46:29',
                'updated_at' => '2018-10-02 16:46:29',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Chicago Bears',
                'created_at' => '2018-10-02 16:46:39',
                'updated_at' => '2018-10-02 16:46:39',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Cincinnati Bengals',
                'created_at' => '2018-10-02 16:46:49',
                'updated_at' => '2018-10-02 16:46:49',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Cleveland Browns',
                'created_at' => '2018-10-02 16:47:00',
                'updated_at' => '2018-10-02 16:47:00',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Dallas Cowboys',
                'created_at' => '2018-10-02 16:47:10',
                'updated_at' => '2018-10-02 16:47:10',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Denver Broncos',
                'created_at' => '2018-10-02 16:47:19',
                'updated_at' => '2018-10-02 16:48:10',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Green Bay Packers',
                'created_at' => '2018-10-02 16:48:32',
                'updated_at' => '2018-10-02 16:48:32',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Houston Texans',
                'created_at' => '2018-10-02 16:48:41',
                'updated_at' => '2018-10-02 16:48:41',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Indianapolis Colts',
                'created_at' => '2018-10-02 16:48:54',
                'updated_at' => '2018-10-02 16:48:54',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Jacksonville Jaguars',
                'created_at' => '2018-10-02 16:49:10',
                'updated_at' => '2018-10-02 16:49:10',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Kansas City Chiefs',
                'created_at' => '2018-10-02 16:49:21',
                'updated_at' => '2018-10-02 16:49:21',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Los Angeles Chargers',
                'created_at' => '2018-10-02 16:52:03',
                'updated_at' => '2018-10-02 16:52:03',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Los Angeles Rams',
                'created_at' => '2018-10-02 16:52:15',
                'updated_at' => '2018-10-02 16:52:15',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Miami Dolphins',
                'created_at' => '2018-10-02 16:52:23',
                'updated_at' => '2018-10-02 16:52:23',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Minnesota Vikings',
                'created_at' => '2018-10-02 16:53:42',
                'updated_at' => '2018-10-02 16:53:42',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'New England Patriots',
                'created_at' => '2018-10-02 16:53:52',
                'updated_at' => '2018-10-02 16:53:52',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'New Orleans Saints',
                'created_at' => '2018-10-02 16:54:02',
                'updated_at' => '2018-10-02 16:54:02',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'New York Giants',
                'created_at' => '2018-10-02 16:54:10',
                'updated_at' => '2018-10-02 16:54:10',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'New York Jets',
                'created_at' => '2018-10-02 16:54:21',
                'updated_at' => '2018-10-02 16:55:01',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Oakland Raiders',
                'created_at' => '2018-10-02 16:55:16',
                'updated_at' => '2018-10-02 16:55:16',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Philadelphia Eagles',
                'created_at' => '2018-10-02 16:55:26',
                'updated_at' => '2018-10-02 16:55:26',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Pittsburgh Steelers',
                'created_at' => '2018-10-02 16:55:48',
                'updated_at' => '2018-10-02 16:55:48',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'San Francisco 49ers',
                'created_at' => '2018-10-02 16:56:01',
                'updated_at' => '2018-10-02 16:56:01',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'Seattle Seahawks',
                'created_at' => '2018-10-02 16:56:11',
                'updated_at' => '2018-10-02 16:56:11',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'Tampa Bay Buccaneers',
                'created_at' => '2018-10-02 16:56:28',
                'updated_at' => '2018-10-02 16:56:28',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'Tennessee Titans',
                'created_at' => '2018-10-02 16:56:36',
                'updated_at' => '2018-10-02 16:56:36',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'Washington Redskins',
                'created_at' => '2018-10-02 16:56:44',
                'updated_at' => '2018-10-02 16:56:44',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'Arizona Cardinals',
                'created_at' => '2018-10-02 16:57:53',
                'updated_at' => '2018-10-02 16:57:53',
            ),
        ));
        
        
    }
}