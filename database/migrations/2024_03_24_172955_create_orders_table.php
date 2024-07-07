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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("table_number");
            $table->string("position");
            $table->integer("course");
            $table->string("waiter_name");
            $table->string("price");
            $table->timestamps();


            $table->softDeletes();

            $table->unsignedBigInteger('loyalty_id')->nullable();
            $table->index('loyalty_id', 'order_loyalty_idx');
            $table->foreign('loyalty_id', 'order_loyalty_fk')->on('loyalties')->references('id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
