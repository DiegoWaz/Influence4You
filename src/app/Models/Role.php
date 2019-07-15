<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jul 2019 13:21:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Role extends Eloquent
{
	protected $fillable = [
		'name',
		'description'
	];

	public function users() {
		return $this->belongsToMany(User::class);
	}
}
