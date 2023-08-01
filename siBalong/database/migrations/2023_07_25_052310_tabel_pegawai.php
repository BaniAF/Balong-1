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
         Schema::create('pegawai', function(Blueprint $table){
            $table-> string('id', 5);
            $table-> string('nip', 20);
            $table-> string('namaPegawai', 50);
            $table-> string('jabatan', 50);
            $table-> string('noTelp', 12);
            $table-> text('alamat');
            $table-> timestamps();
        });
        Schema::table('pegawai', function(Blueprint $table){
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
