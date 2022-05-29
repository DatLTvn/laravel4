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
        Schema::create('tbl_all_category_product', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
            $table->string('category_gia');
            $table->text('category_chucnang');
            $table->text('category_desc');
            $table->integer('category_status');
            $table->string('category_file')->nullable();
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
        Schema::dropIfExists('tbl_all_category_product');
    }
};
