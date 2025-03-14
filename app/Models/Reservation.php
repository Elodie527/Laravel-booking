<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Reservation
 * 
 * @property int $id
 * @property int $user_id
 * @property int $room_id
 * @property Carbon $reserved_date
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservations';

	protected $casts = [
		'user_id' => 'int',
		'reserved_date' => 'date',
		'start_time' => 'string',
		'end_time' => 'string'
	];

	protected $fillable = [
		'user_id',
		'reserved_date',
		'start_time',
		'end_time',
		'nom_salle'
	];
	public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

