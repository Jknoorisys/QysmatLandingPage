<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data['installs'] = DB::table('web_pages')->where('page_name', 'installs')->first();
    $data['reviews'] = DB::table('web_pages')->where('page_name', 'reviews')->first();

    $data['content'] = view('landing_page.home', $data);
    return view('landing_page.main1', $data);
})->name('/');

Route::get('privacy-policy', function () {
    $data['page'] = DB::table('web_pages')->where('page_name', '=', 'privacy_policy')->first();
    $data['content'] = view('landing_page.privacypolicy', $data);
    return view('landing_page.main', $data);
})->name('privacy-policy');

Route::get('terms-conditions', function () {
    $data['page'] = DB::table('web_pages')->where('page_name', '=', 'terms_and_conditions')->first();
    $data['content'] = view('landing_page.terms&condition', $data);
    return view('landing_page.main', $data);
})->name('terms-conditions');

Route::get('faqs', function () {
    $data['faqs'] = DB::table('faqs')->where('status', '=', 'Active')->get();
    $data['content'] = view('landing_page.faq', $data);
    return view('landing_page.main', $data);
})->name('faqs');

