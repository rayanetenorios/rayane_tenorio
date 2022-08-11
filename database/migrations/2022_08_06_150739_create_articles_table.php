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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('title');
            $table->string('caption')->nullable();
            $table->text('text');
            $table->string('image');
            $table->json('tags')->nullable();
            $table->string('record_uuid');
            $table->string('font')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('record_uuid')
                ->references('uuid')
                ->on('records');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
