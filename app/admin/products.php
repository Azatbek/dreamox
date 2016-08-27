<?php

Admin::model(App\products::class)->title('')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title')->sortableDefault();
	Column::string('price')->sortableDefault();
	Column::string('img')->sortableDefault();
	Column::string('anons')->sortableDefault();

})->form(function ()
{
	FormItem::text('title', 'Title');
	FormItem::text('price', 'Price');
	FormItem::image('img', 'Img');
	FormItem::checkbox('published', 'Published');
	FormItem::ckeditor('anons', 'Anons');
	FormItem::ckeditor('description', 'Description');
});
