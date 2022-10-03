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
        Schema::create('apods', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('apiKey');
            $table->string('url');
            $table->string('apiDate')->nullable();
            $table->string('apiStartDate')->nullable();
            $table->string('apiEndDate')->nullable();
            $table->string('apiCount')->nullable();
            $table->string('apiThumbs')->nullable();
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
        Schema::dropIfExists('apods');
    }
};
