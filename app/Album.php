<?php namespace GestorImagenes;
use Illuminate\Database\Eloquent\Model;
class Album extends Model{



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'album';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name', 'description', 'user_id'];

	public function pictures(){
		return $this->hasMany('GestorImagenes\Picture');
	}

	public function property(){
		return $this->belongsTo('GestorImagenes\User');
	}
}
