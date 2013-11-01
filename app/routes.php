<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group([], function()
{

  Route::get('/', function()
  {
  	return View::make('index');
  });

  Route::get('{slug}', function($slug)
  {
    $page = Page::findSlug($slug);

    if(!($page instanceof Prismic\Document))
      App::abort(404);

    return View::make('page')
      ->with('page', $page);
  });

});

Route::get('cache/clear', function()
{
  Cache::flush();
  return Redirect::to('/');
});