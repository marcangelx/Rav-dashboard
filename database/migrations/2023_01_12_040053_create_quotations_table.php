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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('resident_ref');
            $table->string('discipline');
            $table->float('pay');
            $table->string('category')->nullable();;
            $table->integer('gg_score')->nullable();;
            $table->string('group')->nullable();;
            $table->float('cmi');
            $table->foreign('resident_ref')->references('resident_id')->on('assessments')->onDelete('cascade');
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
        Schema::dropIfExists('quotations');
    }
};
