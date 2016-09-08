<?php namespace GestorImagenes;
use Illuminate\Database\Eloquent\Model;
class Picture extends Model{


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'picture';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name', 'description', 'route', 'album_id'];

	public function property(){
		return $this->belongsTo('GestorImagenes\Album');
	}
}
