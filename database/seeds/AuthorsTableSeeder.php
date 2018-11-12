<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Authorsテーブルに入れるデータの定義
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i <= 10; $i++) {
            $author = [
                'name' => '著者名' . $i,
                'kana' => 'チョシャメイ' . $i,
                'created_at' => $now,
                'updated_at' => $now
            ];
            //DBファザードでtableに10件分をinsert
            DB::table('authors')->insert($author);
        }
    }
}
