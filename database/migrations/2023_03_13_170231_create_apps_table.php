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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string('play_store_link')->nullable();
            $table->string('app_store_link')->nullable();
            $table->string('ratings')->default(0);
            $table->string('no_of_reviews')->nullable();
            $table->text('app_email')->nullable();
            $table->text('app_password')->nullable();
            $table->text('app_auth_url')->nullable();
            $table->enum('is_deleted',['0','1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
};
