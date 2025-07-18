<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rate
 * 
 * @property int $id
 * @property int $rate
 * @property int $product_id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class Rate extends Model
{
	use SoftDeletes;

	protected $casts = [
		'rate' => 'int',
		'product_id' => 'int',
		'user_id' => 'int'
	];

	protected $guarded = [];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
