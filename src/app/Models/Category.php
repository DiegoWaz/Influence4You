<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jul 2019 13:21:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $fillable = [
		'name',
	];

	public function influencer()
    {
		return $this->belongsToMany(Influencer::class, 'influencer_category');
    }
}
