<?php namespace App;
	use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
	use SleepingOwl\Models\SleepingOwlModel;
	use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use File;
	class Thumbnails extends SleepingOwlModel implements ModelWithImageFieldsInterface{
		use ModelWithImageOrFileFieldsTrait;

	protected $table = 'thumbnails';
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['name','img','product_id'];

	public function getImageFields()
	{
		return [
			'img' => 'images/',
			'other' => ['other_images/', function($directory, $originalName, $extension)
            {
                return $originalName;
            }]
		];
	}
	public function setImage($field, $image)
	{
		//dd($image);
		if (is_null($image)) return;
		$filename = $image;
		if ($image instanceof UploadedFile)
		{
			$filename = $this->getFilenameFromFile(null, $field, $image);

			$this->$field->setFilename($filename);
		}
		
		$this->attributes[$field] = $filename;
	  	$imgPath = 'images/';
		$imageName = last(explode('/', $image));

        $upload = $image->move($imgPath,$filename);

	}
	public function getList(){
		return static::lists('title', 'id'); 
	}
}
