<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('slug')->nullable(true);
            $table->string('title');
            $table->string('short_description');
            $table->longText('description');
            $table->string('logo_url');
            $table->string('img_url');
            $table->string('work_time');
            $table->double('average_check');
            $table->integer('delivery_cost');
            $table->string('average_delivery_time');
            $table->boolean('is_draft')->default(true);
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('restaurants');
    }
}
