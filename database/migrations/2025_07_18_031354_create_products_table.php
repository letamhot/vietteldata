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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tenGoiCuoc');
            $table->string('giaTien');
            $table->string('dungLuong');
            $table->string('cuPhap');
            $table->string('moTa');
            $table->string('huongDan');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade'); // Liên kết với bảng tags
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
