<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Photo 
            $table->string('photo', 255)->nullable();

            // Name brand or influencer
            $table->string('name');
            
            // Brand or influencer
            $table->string('type');

            // Category
            // $table->unsignedInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');

             // Birth
             $table->date('birth');

            // Localization
            $table->string('localization')->nullable();

            // All languages speak
            $table->string('languages')->nullable();

            // Man or woman
            $table->string('sexe');

            // Title or profession
            $table->string('title');

            // description
            $table->text('description')->nullable();

            // contact
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // social network
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website')->nullable();

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
        Schema::dropIfExists('influencers');
    }
}
