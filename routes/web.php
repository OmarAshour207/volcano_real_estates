<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@HomePage');
Route::get('/about', 'HomeController@aboutPage');

Route::get('/contact-us', 'HomeController@contact');
Route::post('/send/contact', 'ContactController@sendContact')->name('send.contact');

Route::get('/services', 'HomeController@servicesPage');
Route::get('/services/{id}/{title}', 'HomeController@singleService')->name('service.show');

Route::get('/blogs', 'HomeController@blogsPage');
Route::get('/blogs/{id}/{title}', 'HomeController@showBlog')->name('blog.show');

Route::get('properties', 'PropertyController@showProperty');
Route::get('property/{id}/{name}', 'PropertyController@showSingleProperty')->name('property.show');
Route::get('properties/search', 'PropertyController@PropertiesSearch');

Route::get('/lang/{language}', 'HomeController@changeLanguage');


// Admin ROUTES
Auth::routes(['register' => false]);

Route::get('lang/{lang}','Admin\LanguageController@changeLanguage')->name('admin.lang');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'] , function () {

    Route::get('dashboard', 'AdminController@showDashboard');

    Route::resource('states', 'StateController');

    Route::resource('slider', 'SliderController');

    Route::resource('services', 'ServiceController');

    Route::resource('projects', 'ProjectController');

    Route::resource('contacts', 'ContactController');

    Route::resource('about', 'AboutUsController');

    Route::resource('testimonials', 'TestimonialController');

    Route::resource('blogs', 'BlogController');

    Route::resource('team-members', 'TeamMemberController');

    Route::resource('contactus', 'ContactUsController');

    Route::resource('properties', 'PropertyController');

    Route::get('settings/contact-info', 'ContactInfoController@contactInfo')->name('settings.contact');
    Route::post('settings/contact-info', 'ContactInfoController@store')->name('settings.contact.store');

    Route::get('settings/seo', 'SeoController@showSeoPage')->name('settings.seo');
    Route::post('settings/seo', 'SeoController@store')->name('settings.seo.store');

    Route::get('settings/analytics', 'AnalyticsController@showPage')->name('settings.analytics');
    Route::post('settings/analytics', 'AnalyticsController@store')->name('settings.analytics');

    Route::resource('website-settings', 'SettingController');

    Route::resource('logos', 'LogoController');

    Route::post('update/image/{id}', 'PropertyController@uploadMainPhoto');
    Route::post('remove/image/{id}', 'PropertyController@removeMainPhoto');
    Route::post('upload/image/{id}', 'PropertyController@uploadImage');
    Route::post('delete/image', 'PropertyController@removeImage');

    Route::post('upload/image', 'ImageController@uploadPhoto')->name('upload.image');
    Route::post('remove/image', 'ImageController@removePhoto')->name('remove.image');

    Route::get('profile/edit', 'ProfileController@edit')->name('edit.profile');
    Route::post('profile/edit', 'ProfileController@update')->name('update.profile');

    Route::get('themes', 'ThemeController@index')->name('themes.index');
    Route::post('themes/{id}', 'ThemeController@changeTheme')->name('themes.change');

    Route::get('themes/{name}', 'ThemeController@showTheme')->name('theme.show');

    Route::get('settings/tokens', 'FacebookController@showPage')->name('settings.tokens');
    Route::post('settings/tokens', 'FacebookController@store')->name('settings.tokens');

    Route::get('clear/notifications', 'NotificationController@clearAll')->name('clear.notifications');
    Route::get('view/notifications', 'NotificationController@viewAll')->name('view.notifications');
});
