<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     /*definindo a estrutura das faixas*/
    public function up()
{
    Schema::create('faixas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('album_id')->constrained()->onDelete('cascade');
        $table->string('nome');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faixas');
    }
};
