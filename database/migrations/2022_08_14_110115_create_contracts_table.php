<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tenant_id")->constrained();
            $table->foreignId("unit_id")->constrained();
            $table->date("start_date");
            $table->date("end_date");
            $table->string("no_of_payment");
            $table->string("file");
            $table->date("extension_date")->nullable();
            $table->date("termination_date")->nullable();
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
        Schema::dropIfExists('contracts');
    }
};
