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
        Schema::create('foodstaff_orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('foodstaff_id');

            $table->index('order_id', 'order_foodstaff_order_idx');
            $table->index('foodstaff_id','order_foodstaff_foodstaff_idx');

            $table->foreign('order_foodstaff', 'order_foodstaff_order_fk')->on('orders')->references('id');
            $table->foreign('order_foodstaff', 'order_foodstaff_foodstaff_fk')->on('loyalties')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodstaff_orders');
    }
};
