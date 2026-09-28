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
		Schema::create('categorie',function(Blueprint$table){
		$table->increments('idCat');
		$table->string('libelleCat',15);
		});

		Schema::create('produit',function(Blueprint$table){
		$table->increments('idPdt');
		$table->string('libellePdt',15);
		$table->integer('prixPdt');
		$table->integer('stockPdt');
		$table->integer('idCat');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
