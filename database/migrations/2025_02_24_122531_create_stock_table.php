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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('category');
            $table->string('item-description');
            $table->integer('item-serial-number');
            $table->integer('quantity');
            $table->string('invoice-number');
            $table->string('vendor-challan-number');
            $table->string('supplier-name');
            $table->string('project-name');
            $table->string('receiver-name');
            $table->string('requester-name');
            $table->string('approved-by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
