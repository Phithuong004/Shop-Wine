<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0); // Changed to integer.
            $table->unsignedBigInteger('wine_id')->default('0'); // Change to unsignedBigInteger to match 'id' type.
            $table->string('name')->default(''); // Changed default to an empty string.
            $table->integer('quantity')->default(0);
            $table->integer('total');
            $table->timestamps();

            $table->foreign('wine_id')->references('id')->on('wines');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
