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
        Schema::create('syncra_google_authentications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references(config('auth.providers.users.id'))
                ->on(config('auth.providers.users.table'))
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('state', 64);
            $table->text('scopes');
            $table->string('access_token', 256);
            $table->string('refresh_token', 256);
            $table->datetime('expires_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syncra_google_authentications');
    }
};
