<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfluencers extends Migration
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

            // Localization
            $table->string('localization');

            // All languages
            $table->string('language');

            // Sexe
            $table->string('sexe');

            // Title or profession
            $table->string('title');

            // description
            $table->text('description');

            // contact
            $table->string('email');
            $table->string('phone');

            // social network
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('website');

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
        //
    }
}
