<?php

use Illuminate\Database\Seeder;
use App\news;
class newsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //news::truncate();
        factory(news::class,50)->create();
    }
}
