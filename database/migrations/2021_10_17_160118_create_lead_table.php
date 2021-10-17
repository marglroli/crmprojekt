<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->references('user_email')->on('users');
            $table->string('ugyfel_mail')->references('ugyfel_mail')->on('lead');
            $table->string('szoveg');
            $table->string('allapot');
            $table->date('kezdet');
            $table->date('varhato_veg');
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
        Schema::dropIfExists('lead');
    }
}
