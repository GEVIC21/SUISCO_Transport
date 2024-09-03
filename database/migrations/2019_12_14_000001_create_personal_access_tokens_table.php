<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
   *  public function up()
     *{
       *  Schema::create('personal_access_tokens', function (Blueprint $table) {
         *    $table->bigIncrements('id');
           *  $table->morphs('tokenable');
             *$table->string('name');
          *   $table->string('token', 64)->unique();
            * $table->text('abilities')->nullable();
           *  $table->timestamp('last_used_at')->nullable();
            * $table->timestamps();
        * });
     * }
    
    */

    public function up()
{
    Schema::create('personal_access_tokens', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('tokenable_type', 191); // Ajuster la longueur pour éviter l'erreur
        $table->unsignedBigInteger('tokenable_id');
        $table->string('name');
        $table->string('token', 64)->unique();
        $table->text('abilities')->nullable();
        $table->timestamp('last_used_at')->nullable();
        $table->timestamps();

        // Ajouter l'index combiné pour les colonnes morphiques
        $table->index(['tokenable_type', 'tokenable_id']);
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
