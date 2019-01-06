<?php

use Illuminate\Database\Seeder;

class HomepageTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('homepages')->delete();
        \App\Models\Homepage::create();
    }
}
