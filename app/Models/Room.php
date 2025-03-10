<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Room
 * 
 * @property int $id
 * @property string $name
 * @property int $capacity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'rooms';

	protected $casts = [
		'capacity' => 'int'
	];

	protected $fillable = [
		'name',
		'capacity',

	];
	public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
