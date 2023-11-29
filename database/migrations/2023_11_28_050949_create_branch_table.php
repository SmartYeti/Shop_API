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
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('branchid')->uniqid;
            $table->string('Branchname', 50);
            $table->string('Address1', 50);
            $table->string('Address2', 50);
            $table->date('DateOpened');
            $table->string('Type', 1);
            $table->string('Notes', 255);
            $table->string('Remark', 255);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
