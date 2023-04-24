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
        Schema::create('encherirs', function (Blueprint $table) {
            $table->bigIncrements('id_encherir');
            $table->dateTime('duree');
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->foreign('produit_id')->references('id_produit')->on('produits');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id_user')->on('utilisateurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encherirs');
    }
};
