<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsdEurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usdEur', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->double('Open', 8, 5);
            $table->double('High', 8, 5);
            $table->double('Low', 8, 5);
            $table->double('Close', 8, 5);
            $table->integer('Volume');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usdEur');
    }
}
