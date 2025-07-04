<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('proyeks', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('mahasiswa');
        $table->string('status');
        $table->date('periode_mulai');
        $table->date('periode_selesai');
        $table->timestamps();
    });
}
};