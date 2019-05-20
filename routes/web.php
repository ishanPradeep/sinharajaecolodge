<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index');


Route::get('/about-us', 'AboutController@getAboutUs')->name('about-us');
Route::get('/about-sinharaja', 'AboutController@getAboutSinharaja')->name('about-sinharaja');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::Post('/contact', 'ContactController@sendEmail');


Route::get('/gallery/event_activities', 'GalleryController@event_activities')->name('gallery-event_activities');
Route::get('/gallery/waterfalls', 'GalleryController@waterfalls')->name('gallery-waterfalls');
Route::get('/gallery/foods', 'GalleryController@foods')->name('gallery-foods');
Route::get('/gallery/accommodation', 'GalleryController@accommodation')->name('gallery-accommodation');
Route::get('/gallery/trekking', 'GalleryController@trekking')->name('gallery-trekking');
Route::get('/gallery/camping', 'GalleryController@camping')->name('gallery-camping');

Route::post('/newsletter', 'NewsletterController@store');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
Route::get('sliders/index', 'Voyager\SliderController@index')->name('voyager.sliders.index');
Route::get('sliders/create', 'Voyager\SliderController@create')->name('voyager.sliders.create');
Route::post('sliders', 'Voyager\SliderController@store')->name('voyager.sliders.store');
Route::get('sliders', 'Voyager\SliderController@show')->name('voyager.sliders.show');




    Route::get('latest-adventures/index', 'Voyager\AdventuresController@index')->name('voyager.latest-adventures.index');
    Route::get('adventures/create', 'Voyager\AdventuresController@create')->name('voyager.adventures.create');//pk
    Route::get('latest-adventures/order', 'Voyager\AdventuresController@show')->name('voyager.latest-adventures.show');
    Route::post('adventures', 'Voyager\AdventuresController@store')->name('voyager.adventures.store');


    Route::get('home-page-events/index', 'Voyager\HomePageEventController@index')->name('voyager.home-page-events.index');
    Route::get('home-page-events/create', 'Voyager\HomePageEventController@create')->name('voyager.home-page-events.create');//pk
    Route::get('home-page-events/order', 'Voyager\HomePageEventController@show')->name('voyager.home-page-events.show');
    Route::post('home-page-events', 'Voyager\HomePageEventController@store')->name('voyager.home-page-events.store');


    Route::get('gallery-infos/index', 'Voyager\GalleryInfoController@index')->name('voyager.gallery-infos.index');
    Route::get('gallery-infos/create', 'Voyager\GalleryInfoController@create')->name('voyager.gallery-infos.create');//pk
    Route::get('gallery-infos/order', 'Voyager\GalleryInfoController@show')->name('voyager.gallery-infos.show');
    Route::post('gallery-infos', 'Voyager\GalleryInfoController@store')->name('voyager.gallery-infos.store');


  


    Route::get('customer-says/index', 'Voyager\CustomerSayController@index')->name('voyager.customer-says.index');
    Route::get('customer-says/create', 'Voyager\CustomerSayController@create')->name('voyager.customer-says.create');//pk
    Route::get('customer-says/order', 'Voyager\CustomerSayController@show')->name('voyager.customer-says.show');
    Route::post('customer-says', 'Voyager\CustomerSayController@store')->name('voyager.customer-says.store');



    Route::get('customer/index', 'Voyager\CustomerController@index')->name('voyager.customer.index');
    Route::get('customer/create', 'Voyager\CustomerController@create')->name('voyager.customer.create');//pk
    Route::post('customers', 'Voyager\CustomerController@store')->name('voyager.customers.store');
    Route::get('customer/{say}', 'Voyager\CustomerController@destroy')->name('voyager.customer.destroy');
    Route::get('customer/{say}/edit', 'Voyager\CustomerController@edit')->name('voyager.customer.edit');
    Route::post('customer/{say}/edit', 'Voyager\CustomerController@update');

    



    Route::get('gallery-event/index', 'Voyager\GalleryEventActivityController@index')->name('voyager.gallery-event.index');
    Route::get('gallery-event/create', 'Voyager\GalleryEventActivityController@create')->name('voyager.gallery-event.create');//pk
    Route::post('gallery-event', 'Voyager\GalleryEventActivityController@store')->name('voyager.gallery-event.store');
    Route::get('gallery-event/{event}', 'Voyager\GalleryEventActivityController@destroy')->name('voyager.gallery-event.destroy');
    Route::get('gallery-event/{event}/edit', 'Voyager\GalleryEventActivityController@edit')->name('voyager.gallery-event.edit');
    Route::post('gallery-event/{event}/edit', 'Voyager\GalleryEventActivityController@update');



    Route::get('gallery-waterfall/index', 'Voyager\GalleryWaterfallsController@index')->name('voyager.gallery-waterfall.index');
    Route::get('gallery-waterfall/create', 'Voyager\GalleryWaterfallsController@create')->name('voyager.gallery-waterfall.create');//pk
    Route::post('gallery-waterfall', 'Voyager\GalleryWaterfallsController@store')->name('voyager.gallery-waterfall.store');
    Route::get('gallery-waterfall/{waterfall}', 'Voyager\GalleryWaterfallsController@destroy')->name('voyager.gallery-waterfall.destroy');
    Route::get('gallery-waterfall/{waterfall}/edit', 'Voyager\GalleryWaterfallsController@edit')->name('voyager.gallery-waterfall.edit');
    Route::post('gallery-waterfall/{waterfall}/edit', 'Voyager\GalleryWaterfallsController@update');



    Route::get('gallery-food/index', 'Voyager\GalleryFoodController@index')->name('voyager.gallery-food.index');
    Route::get('gallery-food/create', 'Voyager\GalleryFoodController@create')->name('voyager.gallery-food.create');//pk
    Route::post('gallery-food', 'Voyager\GalleryFoodController@store')->name('voyager.gallery-food.store');
    Route::get('gallery-food/{food}', 'Voyager\GalleryFoodController@destroy')->name('voyager.gallery-food.destroy');
    Route::get('gallery-food/{food}/edit', 'Voyager\GalleryFoodController@edit')->name('voyager.gallery-food.edit');
    Route::post('gallery-food/{food}/edit', 'Voyager\GalleryFoodController@update');


    Route::get('gallery-accommodation/index', 'Voyager\GalleryAccommodationController@index')->name('voyager.gallery-accommodation.index');
    Route::get('gallery-accommodation/create', 'Voyager\GalleryAccommodationController@create')->name('voyager.gallery-accommodation.create');//pk
    Route::post('gallery-accommodation', 'Voyager\GalleryAccommodationController@store')->name('voyager.gallery-accommodation.store');
    Route::get('gallery-accommodation/{accommodation}', 'Voyager\GalleryAccommodationController@destroy')->name('voyager.gallery-accommodation.destroy');
    Route::get('gallery-accommodation/{accommodation}/edit', 'Voyager\GalleryAccommodationController@edit')->name('voyager.gallery-accommodation.edit');
    Route::post('gallery-accommodation/{accommodation}/edit', 'Voyager\GalleryAccommodationController@update');


    Route::get('gallery-trekking/index', 'Voyager\GalleryTrekkingController@index')->name('voyager.gallery-trekking.index');
    Route::get('gallery-trekking/create', 'Voyager\GalleryTrekkingController@create')->name('voyager.gallery-trekking.create');//pk
    Route::post('gallery-trekking', 'Voyager\GalleryTrekkingController@store')->name('voyager.gallery-trekking.store');
    Route::get('gallery-trekking/{trekking}', 'Voyager\GalleryTrekkingController@destroy')->name('voyager.gallery-trekking.destroy');
    Route::get('gallery-trekking/{trekking}/edit', 'Voyager\GalleryTrekkingController@edit')->name('voyager.gallery-trekking.edit');
    Route::post('gallery-trekking/{trekking}/edit', 'Voyager\GalleryTrekkingController@update');


    Route::get('gallery-camping/index', 'Voyager\GalleryCampingController@index')->name('voyager.gallery-camping.index');
    Route::get('gallery-camping/create', 'Voyager\GalleryCampingController@create')->name('voyager.gallery-camping.create');//pk
    Route::post('gallery-camping', 'Voyager\GalleryCampingController@store')->name('voyager.gallery-camping.store');
    Route::get('gallery-camping/{camping}', 'Voyager\GalleryCampingController@destroy')->name('voyager.gallery-camping.destroy');
    Route::get('gallery-camping/{camping}/edit', 'Voyager\GalleryCampingController@edit')->name('voyager.gallery-camping.edit');
    Route::post('gallery-camping/{camping}/edit', 'Voyager\GalleryCampingController@update');


    Route::get('about/index', 'Voyager\AboutController@index')->name('voyager.about.index');
    Route::get('about/create', 'Voyager\AboutController@create')->name('voyager.about.create');
    Route::post('about', 'Voyager\AboutController@store')->name('voyager.about.store');





    Route::get('our-agent/index', 'Voyager\OurAgentController@index')->name('voyager.our-agent.index');
    Route::get('our-agent/create', 'Voyager\OurAgentController@create')->name('voyager.our-agent.create');//pk
    Route::post('our-agent', 'Voyager\OurAgentController@store')->name('voyager.our-agent.store');
    Route::get('our-agent/{agent}', 'Voyager\OurAgentController@destroy')->name('voyager.our-agent.destroy');
    Route::get('our-agent/{agent}/edit', 'Voyager\OurAgentController@edit')->name('voyager.our-agent.edit');
    Route::post('our-agent/{agent}/edit', 'Voyager\OurAgentController@update');



    Route::get('sned-mail/index', 'Voyager\SubscribeController@index')->name('voyager.subscribe.index');
    Route::get('sned-mail/create', 'Voyager\SubscribeController@create')->name('voyager.sned-mail.create');
    Route::post('sned-mail/create', 'Voyager\SubscribeController@store')->name('voyager.sned-mail.store');
    Route::get('sned-mail', 'Voyager\SubscribeController@show')->name('voyager.sned-mail.show');


    // Route::get('our-agents/create', 'Voyager\OurAgentController@create')->name('voyager.our-agents.create');

    // Route::post('our-agents', 'Voyager\OurAgentController@store')->name('voyager.our-agents.store');

    // Route::get('our-agents/{our_agent}/edit', 'Voyager\OurAgentController@edit')->name('voyager.our-agents.edit');

    // Route::post('our-agents/{our_agent}/edit', 'Voyager\OurAgentController@update');



    Route::get('our-videos/index', 'Voyager\OurVideoController@index')->name('voyager.our-videos.index');
    Route::get('our-videos/create', 'Voyager\OurVideoController@create')->name('voyager.our-videos.create');
    Route::post('our-videos', 'Voyager\OurVideoController@store')->name('voyager.our-videos.store');
    Route::get('our-videos', 'Voyager\OurVideoController@show')->name('voyager.our-videos.show');


    Route::get('packages/index', 'Voyager\PackageController@index')->name('voyager.packages.index');
    Route::get('packages/create', 'Voyager\PackageController@create')->name('voyager.packages.create');
    Route::post('packages', 'Voyager\PackageController@store')->name('voyager.packages.store');
    Route::get('packages', 'Voyager\PackageController@show')->name('voyager.packages.show');




    Route::get('about-forests.index', 'Voyager\AboutForestController@create')->name('voyager.about-forests.index');


    Route::post('about-forests.index', 'Voyager\AboutForestController@update');


});
