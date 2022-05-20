<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')
                ->constrained('settings')
                ->cascadeOnDelete();
            $table->foreignId('skill_id')
                ->constrained('settings')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('skill_request');
    }
}
