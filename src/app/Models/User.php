<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jul 2019 13:21:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function roles() {
		return $this->belongsToMany(Role::class);
	}

	/**
	* @param string|array $roles
	*/

	public function authorizeRoles($roles) {
		if (is_array($roles)) {
			return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.');
		}

		return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
	}

	/**
	* Check multiple roles
	* @param array $roles
	*/

	public function hasAnyRole($roles) {
		return null !== $this->roles()->whereIn('name', $roles)->first();
	}

	/**
	* Check one role
	* @param string $role
	*/

	public function hasRole($role) {
		return null !== $this->roles()->where('name', $role)->first();
	}
}
