<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddCoverPuppetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puppets', function (Blueprint $table) {
            $table->string('cover')->nullable()->after('body'); // Imposta posizione colonna: in questo caso dopo la colonna chiamata body
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
            $table->dropColumn('cover'); // La colonna "cover" verrà rimossa dalla tabella durante l'esecuzione del rollback della migrazione
        });
    }
}
