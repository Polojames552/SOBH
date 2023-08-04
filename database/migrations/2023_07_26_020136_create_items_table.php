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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            // $table->string('OwnerName');
            $table->string('ProductName');
            $table->string('Description');
            $table->string('Desired_Offer');
            // $table->string('Municipality');
            $table->string('Category');
            $table->string('Picture_1');
            $table->string('Picture_2');
            $table->string('Picture_3');
            $table->string('Item_Status');
            // $table->double('user_rating', 8,1);
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
};
