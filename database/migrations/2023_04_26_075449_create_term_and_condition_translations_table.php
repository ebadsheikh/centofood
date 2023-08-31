<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        if (! Schema::hasTable('term_and_condition_translations')) {
            Schema::create('term_and_condition_translations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('term_and_condition_id')->constrained('term_and_conditions')->cascadeOnUpdate()->cascadeOnDelete();
                $table->string('locale', 20);
                $table->text('description')->nullable();
                $table->unique(['term_and_condition_id', 'locale']);
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('term_and_condition_translations');
    }
};
