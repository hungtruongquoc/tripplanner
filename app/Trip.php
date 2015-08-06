<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'trip';
	protected $primaryKey = 'Id';
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;
}
