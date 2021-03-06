<?php

// Register Twill routes here (eg. Route::module('posts'))
Route::module('products');
Route::module('pages');

Route::name('contact')->get('contact', 'PageController@contactPage');
Route::module('news');
Route::name('about.about_us')->get('about/about_us', 'PageController@aboutUsPage');
Route::name('about.project')->get('about/project', 'PageController@projectPage');
Route::name('about.trainee')->get('about/trainee', 'PageController@traineePage');
Route::name('gallery')->get('gallery', 'PageController@gallery');
Route::name('more_content.buy_information')->get('more_content/buy_information', 'PageController@buyInformation');
Route::name('more_content.footer')->get('more_content/footer', 'PageController@footer');
Route::name('featured.frontpage_more_content')->get('featured/frontpage_more_content', 'PageController@frontpageMoreContent');
