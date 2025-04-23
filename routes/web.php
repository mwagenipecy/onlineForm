<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');


Route::get('/register', function () {
    return redirect('/login');
})->name('register');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');



    Route::get('supplementary', function () {
        return view('pages.supplementary-list');
    })->name('supplementary.list');



    Route::get('miner', function () {
        return view('pages.miner-list');
    })->name('miner.list');


    Route::get('user-list', function () {
        return view('pages.user');
    })->name('user.list');



    Route::get('dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard.list');




    Route::get('government-list', function () {
        return view('pages.government-list');
    })->name('government.list');


});



Route::get('/government/data', function () {
    return view('pages.government-form');
})->name('government.data');


Route::get('/miners/collection', function () {
    return view('pages.miner');
})->name('miners.collection');


Route::get('/supplementary/collection', function () {
    return view('pages.supplementary');
})->name('supplementary.collection');



Route::view('/form/thank-you', 'pages.complete-page')->name('form.thankyou');

Route::get('/webmail', function () {
    return redirect()->away('https://server22.tanzaniaservers.com/roundcube/?_task=mail&_mbox=INBOX');
});

Route::get('about-us',function(){
    return view('pages.about-us');

})->name('about.us');



Route::get('privacy',function(){
    return view('pages.privacy');

})->name('privacy');



Route::get('terms',function(){
    return view('pages.terms');

})->name('terms.conditions');


Route::get('contact',function(){
    return view('pages.contact');

})->name('contact');


Route::get('financial/institution',function(){
    return view('pages.finance');

})->name('financial.institution');


Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale.switch');





