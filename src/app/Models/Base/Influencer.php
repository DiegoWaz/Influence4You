<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jul 2019 14:42:49 +0000.
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
 * @package App\Models\Base
 */
class Influencer extends Eloquent
{

}
