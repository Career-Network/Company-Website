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
        Schema::create('testimony', function (Blueprint $table) {
            $table->id('id_testimony');
            $table->string('participant_name');
            $table->string('class_name');
            $table->text('testimonial');
            $table->string('participant_pic')->nullable();
            $table->boolean('featured_landing_page')->default(0);
            $table->boolean('featured_class_page')->default(0);
            $table->string('participant_prof')->nullable();
            $table->string('id_class');
            $table->timestamps();

            $table->foreign('id_class')
                  ->references('id_class')
                  ->on('kelas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimony');
    }
};
