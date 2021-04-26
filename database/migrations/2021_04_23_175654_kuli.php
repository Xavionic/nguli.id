<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kuli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(Schema::hasTable('kuli')){
            echo 'Table kuli already exist, failed creating table kuli';
        }else{
            Schema::create('kuli', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('alamat');
                $table->string('no_telp');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('kuli');
    }
}
