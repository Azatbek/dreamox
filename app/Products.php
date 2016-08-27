<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
	protected $table = 'products';
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['title','anons','description','img','price','published'];
}
