<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            // $table->integer('distribution_id');
            $table->unsignedBigInteger('distribution_id')->index();
            $table->foreign('distribution_id')->references('id')->on('distribution');
            // $table->integer('transportation_id');
            $table->unsignedBigInteger('transportation_id')->index();
            $table->foreign('transportation_id')->references('id')->on('transportation');
            $table->date('date_distributed');
            $table->enum('status' ,[
                'delivered' , 'return'
            ]);
            $table->softDeletes();
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
        Schema::dropIfExists('deliveries');
    }
}
