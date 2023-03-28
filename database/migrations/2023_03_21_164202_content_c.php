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
          Schema::create('content_c', function(Blueprint $table) {
                $table->id();
                $table->timestamps();
            	$table->string('product_name');
                $table->string('img');
                $table->string('complete_price');
                $table->string('quantity');
                $table->BigInteger('cart_id');
                $table->BigInteger('product_id');

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
