<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('size')->nullable();
            $table->timestamps();
        });
        DB::table('sizes')->insert([
            ['size' => 'Blister'],
            ['size' => 'Caja'],
            ['size' => 'Frasco'],
            ['size' => 'Sobre'],
            ['size' => 'Tableta'],
            ['size' => 'Unidad'],
            ['size' => 'Vial'],
            ['size' => 'Ampolla'],
            ['size' => 'Gotas'],
            ['size' => 'Jarabe'],
            ['size' => 'Crema'],
            ['size' => 'Gel'],
            ['size' => 'Polvo'],
            ['size' => 'Suspensión'],
            ['size' => 'Supositorio'],
            ['size' => 'Inyectable'],
            ['size' => 'Óvulo'],
            ['size' => 'Parche'],
            ['size' => 'Solución'],
            ['size' => 'Spray'],
            ['size' => 'Tira'],
            ['size' => 'Pastilla'],
            ['size' => 'Cápsula'],
            ['size' => 'Goma de mascar'],
            ['size' => 'Loción'],
            ['size' => 'Polvo efervescente'],
            ['size' => 'Polvo para solución oral'],


        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};