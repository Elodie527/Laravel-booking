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
		'room_id' => 'int',
		'reserved_date' => 'datetime',
		'start_time' => 'datetime',
		'end_time' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'room_id',
		'reserved_date',
		'start_time',
		'end_time'
	];
	public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
	public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
