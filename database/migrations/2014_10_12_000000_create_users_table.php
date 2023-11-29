<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('empid')->uniqid;
            $table->string('lastname',30);
            $table->string('firstname',30);
            $table->string('middlename',30);
            $table->string('password');
            $table->string('status',10);
            $table->date('datehired');
            $table->decimal('salary',10,2);
            $table->string('notes',255);
            $table->string('remark',255);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
