<?php namespace App;
	use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
	use SleepingOwl\Models\SleepingOwlModel;
	use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use File;
	class Products extends SleepingOwlModel implements ModelWithImageFieldsInterface{
		use ModelWithImageOrFileFieldsTrait;

	protected $table = 'products';
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['title','anons','description','img','price','published','available'];

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
}
