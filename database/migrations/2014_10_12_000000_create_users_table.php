<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->enum('role', ['admin', 'employee', 'company']);
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->foreignId('province_id')
                ->nullable()
                ->constrained('settings')
                ->nullOnDelete();
            $table->foreignId('major_id')
                ->nullable()
                ->constrained('settings')
                ->nullOnDelete();
            $table->foreignId('file_id')
                ->nullable()
                ->constrained('files')
                ->nullOnDelete();
            $table->foreignId('logo_id')
                ->nullable()
                ->constrained('files')
                ->nullOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
