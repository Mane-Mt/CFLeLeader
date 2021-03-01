<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeModificationToPayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payements', function (Blueprint $table) {
            $table->unique('tx_reference');
            $table->string('identifier')->unique()->nullable()->after('tx_reference');
            $table->unique('payment_reference');
            $table->bigInteger('inscription_id')->after('status');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payements', function (Blueprint $table) {
            $table->dropColumn('inscription_id');
            $table->dropColumn('identifier');
            $table->dropUnique('payement_id');
            $table->dropUnique('tx_reference');
        });
    }
}
