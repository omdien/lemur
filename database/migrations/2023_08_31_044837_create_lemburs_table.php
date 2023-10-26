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
        Schema::create('lemburs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('supel_id');
            $table->timestamp('lem_dari')->nullable()->default(null);
            $table->timestamp('lem_sampai')->nullable()->default(null);
            $table->text("lem_maksud");
            $table->text("lem_tujuan");
            $table->string("lem_tempat");
            $table->text("lem_hasil");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lemburs');
    }
};
