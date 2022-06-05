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
        Schema::create('slipgajis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->enum('jeniskelamin', ['Laki Laki', 'Perempuan']);
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->longText('fileslipgaji')->nullable();
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slipgajis');
    }
};
