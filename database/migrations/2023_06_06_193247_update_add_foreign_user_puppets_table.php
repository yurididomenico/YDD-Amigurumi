<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddForeignUserPuppetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puppets', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Colonna foreign key = dato inserito è un id ma foreign key e non primary key
            // Creazione legame

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            // onDelete: Alla cancellazione record non si cancella il collegamento
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('puppets', function (Blueprint $table) {
            $table->dropForeign('puppets_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
