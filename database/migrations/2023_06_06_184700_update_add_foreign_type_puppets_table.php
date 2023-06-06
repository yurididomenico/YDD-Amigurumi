<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddForeignTypePuppetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puppets', function (Blueprint $table) {
            // Colonna foreign key = dato inserito è un id ma foreign key e non primary key
            $table->unsignedBigInteger('type_id')->nullable();
            // Creazione legame

            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
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
            $table->dropForeign('puppets_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
}
