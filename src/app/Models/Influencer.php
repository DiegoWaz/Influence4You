<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jul 2019 13:21:36 +0000.
 */

namespace App\Models;
use Carbon\Carbon;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Influencer
 * 
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $type
 * @property string $localization
 * @property string $languages
 * @property string $sexe
 * @property string $title
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $website
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Influencer extends Eloquent
{
	protected $fillable = [
		'photo',
		'name',
		'type',
		'localization',
		'languages',
		'birth',
		'sexe',
		'title',
		'description',
		'email',
		'phone',
		'facebook',
		'twitter',
		'instagram',
		'youtube',
		'website'
	];

	public function categories()
    {
		return $this->belongsToMany(Category::class, 'influencer_category');
	}
	
	public function getAgeAttribute()
	{
		return Carbon::parse($this->attributes['birth'])->age;
	}
}
