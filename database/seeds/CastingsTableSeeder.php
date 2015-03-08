<?php

use Illuminate\Database\Seeder;

class CastingsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('castings')->delete();

        $castings = array(
            ['id' => 1, 'voter_id' => '01', 'select_candidate' => 'mukta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'voter_id' => '02', 'select_candidate' => 'baby', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        // Uncomment the below to run the seeder
        DB::table('castings')->insert($castings);
    }

}