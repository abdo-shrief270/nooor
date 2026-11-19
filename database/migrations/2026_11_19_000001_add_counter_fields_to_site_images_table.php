<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_images', function (Blueprint $table): void {
            $table->boolean('counter_enabled')->default(false)->after('is_active');
            $table->string('counter_title')->nullable()->after('counter_enabled');
            $table->unsignedInteger('counter_goal')->nullable()->after('counter_title');
            $table->unsignedInteger('counter_completed')->nullable()->after('counter_goal');
            $table->string('counter_unit', 50)->nullable()->after('counter_completed');
            $table->string('counter_button', 80)->nullable()->after('counter_unit');
        });
    }

    public function down(): void
    {
        Schema::table('site_images', function (Blueprint $table): void {
            $table->dropColumn([
                'counter_enabled',
                'counter_title',
                'counter_goal',
                'counter_completed',
                'counter_unit',
                'counter_button',
            ]);
        });
    }
};
