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
                $table->string('site_name', 50);
                $table->string('meta_title')->nullable();
                $table->longText('meta_description')->nullable();
                $table->string('color1')->default('#000');
                $table->string('color2')->default('#000');
                $table->string('color3')->default('#000');
                $table->string('color4')->default('#000');
                $table->string('gsc')->nullable();
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
