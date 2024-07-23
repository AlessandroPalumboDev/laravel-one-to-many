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
        Schema::table('projects', function (Blueprint $table) {

            // Creo la colonna
            $table->unsignedBigInteger('type_id')->nullable()->after('id');

            // Creo chiave esterna
            $table->foreign('type_id')
            ->references('id')
            ->on('types')
            // Quando viene eliminato un tipo in caso sia relazionato a uno o più progetti, il campo type_id risulterà NULL
            ->nullOnDelete();

            // Zucchero sintattico (versione abbreviata)
            // $table->foreignId('type_id')->constrained
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            //scollego la chiave
            $table->dropForeign('projects_type_id_foreign');

            // droppo la colonna
            $table->dropColumn('type_id');
        });
    }
};
