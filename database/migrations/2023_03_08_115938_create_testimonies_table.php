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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();
            $table->string('participant_name');
            $table->string('testimonial');
            $table->string('participant_pic');
            $table->enum('featured_landing_page', ['0', '1'])->default('0');
            $table->enum('featured_class_page', ['0', '1'])->default('0');
            $table->string('participant_prof');
            $table->unsignedBigInteger('kelas_id')->index()->nullable();

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonies');
    }
};
