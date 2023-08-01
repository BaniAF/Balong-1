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
        Schema::create('bukutamu', function(Blueprint $table){
            $table-> string('id', 5);
            $table-> string('namaPengunjung', 50);
            $table-> string('keperluan', 50);
            $table-> string('keterangan', 50);
            $table-> string('noTelp', 12);
            $table-> timestamps();
        });
        Schema::table('bukutamu', function(Blueprint $table){
            $table->primary('id');
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
