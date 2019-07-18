<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jul 2019 00:20:10 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Influencer
 * 
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $type
 * @property int $category_id
 * @property \Carbon\Carbon $birth
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
 * @property \App\Models\Category $category
 *
 * @package App\Models\Base
 */
class Influencer extends Eloquent
{
	protected $casts = [
		'category_id' => 'int'
	];

	protected $dates = [
		'birth'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}
}
