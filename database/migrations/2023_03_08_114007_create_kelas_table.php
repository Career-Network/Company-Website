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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas_cover');
            $table->string('kelas_category');
            $table->longText('description');
            $table->string('kelas_title');
            $table->string('kelas_about');
            $table->char('kelas_price');
            $table->string('kelas_loc');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('syllabus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
