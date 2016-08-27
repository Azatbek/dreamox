<?php
Admin::model(App\products::class)->title('Добавление нового продукта в магазин')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title')->sortableDefault();
	Column::string('price')->sortableDefault();
	Column::image('img')->sortableDefault();

})->form(function ()
{
	FormItem::text('title', 'Title');
	FormItem::text('price', 'Price');
	FormItem::image('img', 'Img');
	FormItem::checkbox('published', 'Published');
	FormItem::ckeditor('anons', 'Anons');
	FormItem::ckeditor('description', 'Description');
});
