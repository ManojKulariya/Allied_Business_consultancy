<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->cascadeOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('menu_items')->cascadeOnDelete();
            $table->string('label');
            $table->string('url')->nullable(); // custom URL
            $table->string('route_name')->nullable(); // named Laravel route
            $table->string('linkable_type')->nullable(); // polymorphic: Page, Service, BlogCategory...
            $table->unsignedBigInteger('linkable_id')->nullable();
            $table->string('target', 10)->default('_self'); // _self, _blank
            $table->string('icon', 100)->nullable();
            $table->string('css_class', 100)->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index(['linkable_type', 'linkable_id']);
            $table->index(['menu_id', 'parent_id', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
