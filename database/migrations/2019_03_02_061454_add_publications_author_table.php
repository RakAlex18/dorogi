<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublicationsAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publications', function (Blueprint $table) {
            //изменяем change() в таблице publications атрибуты столбца author_id на тип данных integer с неотрицательным значением unsigned
            $table->integer('author_id')->unsigned()->change();
            //формируем внешний ключ foreign - 'author_id' для модели author с id со сссылкой references на поле 'id' таблички 'authors' и применяем изменение change()
            $table->foreign('author_id')->references('id')->on('authors')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            //
        });
    }
}
