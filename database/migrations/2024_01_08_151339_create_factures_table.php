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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('NomSoicety');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('adresse');
            $table->string('email')->default('mondhercasabella@gmail.com');
            $table->string('Btscasbella')->default('21574');
            $table->string('RipAmanBank')->default('07075013310110009002');
            $table->string('RipBts')->default('27000000000130284020');
            $table->string('Mf')->default('1212517/L/B/M/000');
            $table->string('telephone')->default('+21625225712');
            $table->decimal('prix_hors_taxe', 10, 2)->nullable();
            $table->decimal('prix_avec_taxe', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
