<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupSiteNewsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_site_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo_it');
            $table->text('descrizione_it');
//            $table->string('titolo_en');
//            $table->text('descrizione_en');
//            $table->string('titolo_es');
//            $table->text('descrizione_es');
            $table->string('tag')->nullable()->default(null);
            $table->date('data');
            $table->date('data_fine')->nullable()->default(null);
            $table->boolean('attivo')->default(true);
            $table->timestamps();
            $table->nullableOwnerships();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_site_news');
    }

}
