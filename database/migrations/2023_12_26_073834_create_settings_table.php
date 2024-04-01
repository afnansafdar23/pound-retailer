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
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('application_name', 50)->default('Pound Kingdom');
                $table->string('email')->nullable();
                $table->longText('short_description')->nullable();
                $table->string('color_one')->default('#000');
                $table->string('color_two')->default('#000');
                $table->string('color_three')->default('#000');
                $table->string('color_four')->default('#000');
                $table->string('facebook_link')->nullable();
                $table->string('instagram_link')->nullable();
                $table->string('gsc')->nullable();
                $table->string('site_index')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
