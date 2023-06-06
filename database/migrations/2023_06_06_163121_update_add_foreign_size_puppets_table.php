<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddForeignSizePuppetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puppets', function (Blueprint $table) {
            $table->unsignedBigInteger('size_id')->nullable(); //Colonna foreign key = dato inserito è un id ma foreign key e non primary key
            // Creazione legame
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('set null'); //onDelete: Alla cancellazione record non si cancella il collegamento
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
            $table->dropForeign('puppets_size_id_foreign');
            $table->dropColumn('size_id');
        });
    }
}
