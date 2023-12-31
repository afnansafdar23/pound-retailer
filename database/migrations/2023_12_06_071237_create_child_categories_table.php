<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('child_categories')) {
            Schema::create('child_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name', 40);
                $table->string('sub_name', 40)->nullable();
                $table->longText('description');
                $table->longText('sub_description')->nullable();
                $table->foreignId('parent_category_id')->constrained('parent_categories');
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
    public function down()
    {
        Schema::dropIfExists('child_categories');
    }
};
