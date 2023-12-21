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
        if (!Schema::hasTable('sub_categories')) {
            Schema::create('sub_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name', 40);
                $table->string('sub_name', 40);
                $table->longText('description')->nullable();
                $table->longText('sub_description')->nullable();
                $table->foreignId('child_category_id')->constrained('child_categories');
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
        Schema::dropIfExists('sub_categories');
    }
};
