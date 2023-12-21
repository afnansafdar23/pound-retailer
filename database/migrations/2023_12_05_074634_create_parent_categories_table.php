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
        if (!Schema::hasTable('parent_categories')) {
            Schema::create('parent_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name', 40);
                $table->longText('description');
                $table->string('sub_name', 40)->nullable();
                $table->longText('sub_description')->nullable();
                $table->softDeletes();
                $table->timestamps();
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_categories');
    }
};
