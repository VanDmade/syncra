<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('syncra_gemini_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references(config('auth.providers.users.id'))
                ->on(config('auth.providers.users.table'))
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->json('image_ids')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->string('model');
            $table->text('prompt');
            $table->boolean('has_image')->default(false);
            $table->json('response_schema')->nullable();
            $table->boolean('structured')->default(false);
            $table->json('response_data')->nullable();
            $table->text('response_text')->nullable();
            $table->string('finish_reason')->nullable();
            $table->unsignedInteger('prompt_tokens')->nullable();
            $table->unsignedInteger('completion_tokens')->nullable();
            $table->unsignedInteger('total_tokens')->nullable();
            $table->unsignedInteger('duration_ms')->nullable();
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->string('error')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('syncra_gemini_requests');
    }
};
