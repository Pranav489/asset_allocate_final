<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('year');
            $table->enum('type', ['image', 'video']);
            $table->string('video_url')->nullable();
            $table->string('video_file')->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('awards');
    }
};
