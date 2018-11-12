<?php

use Illuminate\Database\Seeder;

class BookdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Factoryクラスを指定することでレコード定義を読み込んで50件作成
        factory(\TestLaravel\Bookdetail::class, 50)->create();
    }
}
