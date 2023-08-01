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
        Schema::table('layanan', function(Blueprint $table){
            $table-> string('descLayanan', 100);
            $table-> string('lokasi', 100);
            $table-> string('kontak', 15);
            $table-> string('jam_operasional', 100);
            $table-> string('kategoriLayanan', 100);
            $table-> string('persyaratan', 100);
            $table-> string('biaya', 100);
            $table-> string('keterangan', 100);
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
