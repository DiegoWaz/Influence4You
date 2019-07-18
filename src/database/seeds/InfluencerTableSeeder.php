<?php

use Illuminate\Database\Seeder;
use App\Models\Influencer;

class InfluencerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $influencer = new Influencer();
        $influencer->name = 'Mister V';
        $influencer->type = 'influencer';
        $influencer->title = 'Youtubeur';
        $influencer->localization = 'Paris';
        $influencer->languages = 'Français';
        $influencer->birth = '1993-08-14';
        $influencer->sexe = 'man';
        $influencer->email = 'contact@misterv.com';
        $influencer->phone = "0687654312";
        $influencer->facebook = "https://fr-fr.facebook.com/MisterVOnline/";
        $influencer->twitter = "https://twitter.com/MisterVonline";
        $influencer->instagram = "https://www.instagram.com/yvick/";
        $influencer->youtube = "https://www.youtube.com/channel/UC8Q0SLrZLiTj5s4qc9aad-w";
        $influencer->website = "http://leblogdemisterv.com/";
        $influencer->photo = "misterv.jpeg";
        $influencer->save();

        $influencer = new Influencer();
        $influencer->name = 'Squeezie';
        $influencer->type = 'influencer';
        $influencer->title = 'Youtubeur';
        $influencer->localization = 'Paris';
        $influencer->languages = 'Français';
        $influencer->birth = '1996-01-27';
        $influencer->sexe = 'man';
        $influencer->email = 'contact@squeezie.com';
        $influencer->phone = "062376430";
        $influencer->facebook = "https://fr-fr.facebook.com/SqueeZiePageOfficielle/";
        $influencer->twitter = "https://twitter.com/xSqueeZie";
        $influencer->instagram = "https://www.instagram.com/xsqueezie/";
        $influencer->youtube = "https://m.youtube.com/user/aMOODIEsqueezie/videos";
        $influencer->website = "https://squeezie.fr/";
        $influencer->photo = "squeezie.jpg";
        $influencer->save();
    }
}