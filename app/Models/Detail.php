<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detail
 * 
 * @property int $id
 * @property int $qty
 * @property float $price
 * @property float $amount
 * @property int $order_id
 * @property int $product_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Order $order
 * @property Product $product
 *
 * @package App\Models
 */
class Detail extends Model
{
	use SoftDeletes;

	protected $casts = [
		'qty' => 'int',
		'price' => 'float',
		'amount' => 'float',
		'order_id' => 'int',
		'product_id' => 'int'
	];

	protected $guarded = [];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
