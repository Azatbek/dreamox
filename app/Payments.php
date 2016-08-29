<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Payments extends \SleepingOwl\Models\SleepingOwlModel {

	protected $table = 'payments';

	protected $fillable = ['title','product_id','price'];

}
