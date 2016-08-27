<?php namespace App;
	use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;

	class Products extends \SleepingOwl\Models\SleepingOwlModel implements ModelWithImageFieldsInterface{
	protected $table = 'products';
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['title','anons','description','img','price','published'];

	public function getImageFields()
	{
		return [
			'img' => 'images/'
		];
	}
	public function setImage($field, $image)
	{
		if (is_null($image)) return;
		$filename = $image;
		if ($image instanceof UploadedFile)
		{
			$filename = $this->getFilenameFromFile(null, $field, $image);
			$this->$field->setFilename($filename);
		}
		$this->attributes[$field] = $filename;
	}
}
