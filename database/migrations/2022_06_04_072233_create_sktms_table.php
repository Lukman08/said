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
        Schema::create('sktms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->enum('agama', ['Islam', 'Kristen', 'Khatolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->enum('jeniskelamin', ['Laki Laki', 'Perempuan']);
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('name_ortu');
            $table->string('tempatlahir_ortu');
            $table->date('tanggallahir_ortu');
            $table->string('pekerjaan_ortu');
            $table->string('alamat_ortu');
            $table->longText('filesktm')->nullable();
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
        Schema::dropIfExists('sktms');
    }
};
