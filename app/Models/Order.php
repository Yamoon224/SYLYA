<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * 
 * @property int $id
 * @property string $ref
 * @property float $amount
 * @property float $discount
 * @property int $customer_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Collection|Detail[] $details
 *
 * @package App\Models
 */
class Order extends Model
{
	use SoftDeletes;

	protected $casts = [
		'amount' => 'float',
		'discount' => 'float',
		'customer_id' => 'int'
	];

	protected $guarded = [];

	public function customer()
	{
		return $this->belongsTo(User::class, 'customer_id');
	}

	public function details()
	{
		return $this->hasMany(Detail::class);
	}
}
