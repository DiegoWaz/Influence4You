<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jul 2019 00:20:10 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RoleUser
 * 
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class RoleUser extends Eloquent
{
	protected $table = 'role_user';

	protected $casts = [
		'role_id' => 'int',
		'user_id' => 'int'
	];
}
