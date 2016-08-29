<?php

Admin::model(App\Payments::class)->title('')->with()->filters(function ()
{

})->columns(function ()
{

})->form(function ()
{
	FormItem::text('product_id', 'Product');
	FormItem::text('title', 'Title');
	FormItem::text('price', 'Price');
});