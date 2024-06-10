<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_productions', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->timestamps();
        });

        DB::table('category_productions')->insert([
            ['category_name' => 'Analgesics'],
            ['category_name' => 'Antibiotics'],
            ['category_name' => 'Antidepressants'],
            ['category_name' => 'Antibiotic'],
            ['category_name' => 'Antihypertensives'],
            ['category_name' => 'Antipyretics'],
            ['category_name' => 'Antivirals'],
            ['category_name' => 'Diuretics'],
            ['category_name' => 'Sedatives'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_productions');
    }
};