<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('flight', function (Blueprint $table) {

            $table->integer('id');
            $table->string('passenger_name');
            $table->string('airline');
            $table->integer('amount');
            $table->integer('height');
            $table->timestamps();
            // $table->primary('id');
            // $table->dropPrimary('id');
            //$table->renameColumn('airline','aline');
           // $table->unique('height','unique_height');
           // $table->unique('amount','unique_amount');
            //$table->index(['amount','height']);

            // $table->dropColumn('amount');

        });
        // Schema::rename('flight','flights');
        //Schema::drop('flights');
        Schema::table('flight',function(Blueprint $table){
            //$table->string('airline',50)->change();
            $table->renameColumn('airline','aline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight');


    }
}
