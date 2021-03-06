<?php

use Illuminate\Database\Seeder;

class VoterentrysTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voterentrys')->delete();

        $voterentrys = array(
            ['id' => 1, 'voter_name' => 'mukta', 'voter_id' => '01', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'voter_name' => 'baby', 'voter_id' => '02', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        // Uncomment the below to run the seeder
        DB::table('voterentrys')->insert($voterentrys);
    }

}