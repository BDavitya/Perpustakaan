<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agenda_events', function (Blueprint $table) {
            $table->id('id_event');

            $table->unsignedBigInteger('id_kategori');
            $table->string('judul', 150);
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('lokasi', 100);
            $table->enum('status', ['aktif', 'selesai'])->default('aktif');

            $table->timestamps();

            $table->foreign('id_kategori')
                ->references('id_kategori')
                ->on('agenda_kategori')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agenda_events');
    }

};