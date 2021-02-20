<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_no');
            $table->string('item_description')->default('');
            $table->string('m_category');
            $table->string('s_category');
            $table->string('brand');
            $table->string('country');
            $table->string('quality');
            $table->string('warranty');
            $table->string('v_model_no');
            $table->string('v_model_name');
            $table->string('v_class');
            $table->year('year');
           // $table->image('image');
            $table->integer('quantity')->default(0);
            $table->double('cost');
            $table->double('selling_price');
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
        Schema::dropIfExists('items');
    }
}
