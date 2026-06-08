<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('syncra_gemini_requests', function (Blueprint $table) {
            $table->text('error')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('syncra_gemini_requests', function (Blueprint $table) {
            $table->string('error')->nullable()->change();
        });
    }
};
