<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * ここのrunメソッドにシーディングさせるクラスを
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookdetailsTableSeeder::class);
    }
}
