<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMockTestCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mock_test_categories', function (Blueprint $table) {
            $table->id();
            $table->string('mock_category');
            $table->string('image')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('description')->nullable();
            $table->string('exam_format')->nullable();
            $table->unsignedInteger('instructor_id');

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
        Schema::dropIfExists('mock_test_categories');
    }
}
