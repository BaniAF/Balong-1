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
        Schema::create('layanan', function(Blueprint $table){
            $table-> string('id', 5);
            $table-> string('namaLayanan', 50);
            $table-> timestamps();
        });
        Schema::table('layanan', function(Blueprint $table){
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
