<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('brief_description')->nullable();
            $table->text('description')->nullable();
            $table->text('issue')->nullable();
            $table->text('solution')->nullable();
            $table->text('our_function')->nullable();
            $table->text('reason')->nullable();
            $table->text('effect')->nullable();
            $table->string('address')->nullable();
            $table->string('e_location')->nullable();
            $table->string('w_location')->nullable();
            $table->string('responsible_person')->nullable();
            $table->integer('progress')->default(0);
            $table->integer('donors')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('solutions');
    }
}
