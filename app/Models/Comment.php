<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $product_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class Comment extends Model
{
	use SoftDeletes;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $guarded = [];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
