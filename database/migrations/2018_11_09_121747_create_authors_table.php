<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * 著者氏名テーブル定義
     *
     * @return void
     */
    public function up()
    {
        //クロージャにBlueprintのインスタンス
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');  // 著者指名
            $table->string('kana', '100');  // ふりがな
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
