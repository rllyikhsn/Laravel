<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Menggunakan table posts */
        Schema::table('posts', function (Blueprint $table) {
            //menambahkan kolom user_id dengan atribut unsigned
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //menghapus colomn dengan method
            $table->dropColumn('user_id');
        });
    }
}
