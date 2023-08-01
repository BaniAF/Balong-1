<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::table('pegawai', function (Blueprint $table) {
            // Ubah nama kolom 'noTelp' menjadi 'pangkat' dan atur tipe data dan ukuran kolom 'pangkat'
            
            $table->string('pangkat', 50)->after('jabatan');

            // Hapus kolom 'alamat' dari tabel 'pegawai'
            $table->dropColumn('alamat');
            $table->dropColumn('noTelp');
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
