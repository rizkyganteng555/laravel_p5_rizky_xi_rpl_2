<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisTable extends Migration
{
 /**
  * Run the migrations.
  *
  */
 public function up(): void
 {
  Schema::create('penulis', function (Blueprint $table) {
   $table->id();
   $table->text('nama_penulis');
   $table->text('jk');
   $table->string('ttl');
   $table->timestamps();
  });
 }

 /**
  * Reverse the migrations.
  *
  */
 public function down(): void
 {
  Schema::dropIfExists('penulis');
 }
}
