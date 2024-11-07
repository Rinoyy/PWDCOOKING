<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepTable extends Migration
{
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->id('id_resep');             // Primary Key
            $table->text('judul');              // Judul
            $table->text('deksripsi')->nullable(); // Deksripsi (nullable)
            $table->text('Level')->nullable();  // Level (nullable)
            $table->text('waktu');              // Waktu
            $table->text('text')->nullable();              // Waktu
            $table->text('Sub_judul');          // Sub_judul
            $table->text('isi_bahan_bahan');    // Isi_bahan_bahan
            $table->text('cara_membuat');       // Cara_membuat
            $table->integer('Id_kategori');     // Id_kategori
            $table->string('Img', 100)->nullable(); // Img (nullable, max 100 chars)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resep');
    }
}
