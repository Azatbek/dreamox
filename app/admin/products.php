<?php
Admin::model(App\products::class)->title('Добавление нового продукта в магазин')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Заголовок')->sortableDefault();
	Column::string('price', 'Стоимость товара')->sortableDefault();
})->form(function ()
{
	FormItem::text('title', 'Название товара');
	FormItem::text('price', 'Стоимость');
	FormItem::image('img', 'Изображение');
	FormItem::checkbox('published', 'Опубликовать');
	FormItem::ckeditor('anons', 'Короткое описание');
	FormItem::ckeditor('description', 'Описание');
});
