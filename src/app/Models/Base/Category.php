<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jul 2019 00:20:10 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $influencers
 *
 * @package App\Models\Base
 */
class Category extends Eloquent
{
	public function influencers()
	{
		return $this->hasMany(\App\Models\Influencer::class);
	}
}
