<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Imagens;

class CreateModelImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('descricao');
            $table->timestamps();
        });
        Imagens::create(['descricao' => 'Logo (Tamanho recomendado em pixels: 500 x 500)', 'foto' => 'logo.png']);
        Imagens::create(['descricao' => 'Banner 1 (Tamanho recomendado em pixels: 1200 x 500)', 'foto' => 'banner/banner_1.png']);
        Imagens::create(['descricao' => 'Banner 2 (Tamanho recomendado em pixels: 1200 x 500)', 'foto' => 'banner/banner_2.png']);
        Imagens::create(['descricao' => 'Banner 3 (Tamanho recomendado em pixels: 1200 x 500)', 'foto' => 'banner/banner_3.png']);
        Imagens::create(['descricao' => 'Foto da Fábrica (Tamanho recomendado em pixels: 950 x 540)', 'foto' => 'fabrica.png']);
        Imagens::create(['descricao' => 'Galeria 1 (Tamanho recomendado em pixels: 900 x 770)', 'foto' => 'galeria/galeria_1.png']);
        Imagens::create(['descricao' => 'Galeria 2 (Tamanho recomendado em pixels: 900 x 770)', 'foto' => 'galeria/galeria_2.png']);
        Imagens::create(['descricao' => 'Galeria 3 (Tamanho recomendado em pixels: 900 x 770)', 'foto' => 'galeria/galeria_3.png']);
        Imagens::create(['descricao' => 'Galeria 4 (Tamanho recomendado em pixels: 900 x 770)', 'foto' => 'galeria/galeria_4.png']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
