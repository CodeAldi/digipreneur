<?php

use App\Models\MateriPelatihan;
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
        Schema::create('sub_materi_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MateriPelatihan::class);
            $table->string('sub_materi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_materi_pelatihan');
    }
};
