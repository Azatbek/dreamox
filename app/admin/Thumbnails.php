<?php

 //dd($array);
Admin::model(App\Thumbnails::class)->title('Добавление изображения')->with()->filters(function ()
{

})->columns(function ()
{
  Column::string('name', 'Заголовок')->sortableDefault();
  Column::string('img', 'Image');
})->form(function ()
{
	$array = \App\Products::get();
	FormItem::text('name', 'Название');
	FormItem::image('img', 'Изображение');
	FormItem::select('product_id', 'Продукт')->list($array->lists('title','id'));
});
