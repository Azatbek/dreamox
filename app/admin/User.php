<?php

Admin::model(App\User::class)->title('')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name')->sortableDefault();
	Column::string('email')->sortableDefault();
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('email', 'Email');
	FormItem::text('password', 'Password');
	FormItem::text('remember_token', 'Remember Token');
});
