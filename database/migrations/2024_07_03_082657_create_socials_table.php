<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('twitterLink', 300)->defaultValue('https://twitter.com/');
            $table->string('githubLink', 300)->defaultValue('https://github.com/MdTayoburRahman');
            $table->string('linkedinLink', 300)->defaultValue('https://www.linkedin.com/in/mdtayoburrahman/');
            $table->string('instagramLink', 300)->defaultValue('https://www.instagram.com/md_tayobur_rahman/');
            $table->string('facebookLink', 300)->defaultValue('https://www.facebook.com/MdTayoburRahmanKibrea');
            $table->string('pinterestLink', 300)->defaultValue('https://pinterest.com/');
            $table->string('youtubeLink', 300)->defaultValue('https://www.youtube.com/channel/UCznBjmH_tut1yAHgRilYLVQ');
            $table->string('snapchatLink', 300)->defaultValue('https://snapchat.com/');
            $table->string('tiktokLink', 300)->defaultValue('https://tiktok.com/');
            $table->string('behanceLink', 300)->defaultValue('https://behance.com/');
            $table->string('mediumLink', 300)->defaultValue('https://medium.com/');
            $table->string('dribbbleLink', 300)->defaultValue('https://dribbble.com/');
            $table->string('googlePlayLink', 300)->defaultValue('https://play.google.com/store/apps/dev?id=8885326976735726594&hl=en');
            $table->string('websiteLink', 100)->defaultValue('#');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
