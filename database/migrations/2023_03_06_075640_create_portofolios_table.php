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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->longText('welcome_message');
            $table->string('github_link');
            $table->string('image')->nullable();
            $table->string('project_name')->nullable();
            $table->string('client_name')->nullable();
            $table->string('year')->nullable();
            $table->string('live_preview')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('portofolios');
    }
};
