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
        Schema::create('post', function(Blueprint $table){
            $table-> char('id', 5);
            $table-> string('judulPost', 50);
            $table-> text('isiPost');
            $table-> string('kategoriPost', 50);
            $table-> string('userPost', 50);
            $table-> string('statusPost', 50);
            $table-> string('fotoPost', 100);
            $table-> timestamps();
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
