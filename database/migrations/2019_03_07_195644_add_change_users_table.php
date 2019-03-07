<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //изменяем change() в таблице users атрибуты столбцов на ->nullable()->change();
            $table->string('firstName')->nullable()->change();
            $table->string('lastName')->nullable()->change();
            $table->string('phoneNumber')->nullable()->change();
            $table->string('user_role')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
