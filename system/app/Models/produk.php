<?php

namespace App\Models;

use App\Models\User;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class produk extends Model {
	
	use ProdukAttributes, ProdukRelations;

	protected $table = 'produk';

	protected $casts = [
		'created_at'=> 'datetime'
	];
}