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
        Imagens::create(['descricao' => 'Logo', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Banner 1', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Banner 2', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Banner 3', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Foto da Fábrica', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Galeria 1', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Galeria 2', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Galeria 3', 'foto' => 'Ervas']);
        Imagens::create(['descricao' => 'Galeria 4', 'foto' => 'Ervas']);
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
