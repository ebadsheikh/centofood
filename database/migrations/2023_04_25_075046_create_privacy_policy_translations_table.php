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
        if (! Schema::hasTable('privacy_policy_translations')) {
            Schema::create('privacy_policy_translations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('privacy_policy_id')->constrained('privacy_policies')->cascadeOnUpdate()->cascadeOnDelete();
                $table->string('locale', 20);
                $table->text('description')->nullable();
                $table->unique(['privacy_policy_id', 'locale']);
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
        Schema::dropIfExists('privacy_policy_translations');
    }
};
