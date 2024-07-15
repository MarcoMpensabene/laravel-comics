<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $merchList = [
        [
            'src' => '../resources/img/buy-comics-digital-comics.png',
            'content' => 'Digital Comics',
        ],
        [
            'src' => '../resources/img/buy-comics-merchandise.png',
            'content' => 'DC Merchandise',
        ],
        [
            'src' => '../resources/img/buy-comics-subscriptions.png',
            'content' => 'Subscriptions',
        ],
        [
            'src' => '../resources/img/buy-comics-shop-locator.png',
            'content' => 'Comic Shop Locator',
        ],
        [
            'src' => '../resources/img/buy-dc-power-visa.svg',
            'content' => 'DC power Visa',
        ],
    ];
    $listLink =
        ['character', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $dcComicsLinks =
        ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"];
    $shopLinks =
        [" Shop DC", "Shop DC Collectibles"];
    $dcLinks =
        ["Privacy policy(new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
    $sitesLinks =
        ["MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"];

    return view('pages.home', compact("merchList", "listLink", "dcComicsLinks", "shopLinks", "dcLinks", "sitesLinks"));
});
