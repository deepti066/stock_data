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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('category')->nullable();
            $table->string('item_description')->nullable();
            $table->integer('item_serial_number')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('vendor_challan_number')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('requester_name')->nullable();
            $table->string('approved_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
