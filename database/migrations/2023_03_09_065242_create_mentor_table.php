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
        Schema::create('mentor', function (Blueprint $table) {
            $table->id('id_mentor');
            $table->string('mentor_name');
            $table->string('current_job');
            $table->string('expertise');
            $table->text('mentor_about');
            $table->string('mentor_pic')->nullable();
            $table->string('id_class');
            $table->timestamps();

            $table->foreign('id_class')->references('id_class')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentor');
    }
};
