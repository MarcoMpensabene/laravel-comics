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

$data = require resource_path('data/comics.php');

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
    $listLink = [
        'character' => [
            'name' => 'home',
            'route' => '/'
        ],
        'comics' => [
            'name' => 'comics',
            'route' => '/comics'
        ],
        'movies' => [
            'name' => 'movies',
            'route' => '/movies'
        ],
        'tv' => [
            'name' => 'tv',
            'route' => '/tv-shows'
        ],
        'games' => [
            'name' => 'games',
            'route' => '/games'
        ],
        'collectibles' => [
            'name' => 'collectibles',
            'route' => '/collectibles'
        ],
        'videos' => [
            'name' => 'videos',
            'route' => '/videos'
        ],
        'fans' => [
            'name' => 'fans',
            'route' => '/fans'
        ],
        'news' => [
            'name' => 'news',
            'route' => '/news'
        ],
        'shop' => [
            'name' => 'shop',
            'route' => '/shop'
        ]
    ];
    $dcComicsLinks =
        ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"];
    $shopLinks =
        [" Shop DC", "Shop DC Collectibles"];
    $dcLinks =
        ["Privacy policy(new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
    $sitesLinks =
        ["MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"];


    return view('pages.home', compact("merchList", "listLink", "dcComicsLinks", "shopLinks", "dcLinks", "sitesLinks"));
})->name('guest.home');

Route::get('/comics', function () use ($data) {
    $listLink = [
        'character' => [
            'name' => 'home',
            'route' => '/'
        ],
        'comics' => [
            'name' => 'comics',
            'route' => '/comics'
        ],
        'movies' => [
            'name' => 'movies',
            'route' => '/movies'
        ],
        'tv' => [
            'name' => 'tv',
            'route' => '/tv-shows'
        ],
        'games' => [
            'name' => 'games',
            'route' => '/games'
        ],
        'collectibles' => [
            'name' => 'collectibles',
            'route' => '/collectibles'
        ],
        'videos' => [
            'name' => 'videos',
            'route' => '/videos'
        ],
        'fans' => [
            'name' => 'fans',
            'route' => '/fans'
        ],
        'news' => [
            'name' => 'news',
            'route' => '/news'
        ],
        'shop' => [
            'name' => 'shop',
            'route' => '/shop'
        ]
    ];
    $dcComicsLinks =
        ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"];
    $shopLinks =
        [" Shop DC", "Shop DC Collectibles"];
    $dcLinks =
        ["Privacy policy(new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
    $sitesLinks =
        ["MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"];



    return view('pages.comics', compact("listLink", "dcComicsLinks", "shopLinks", "dcLinks", "sitesLinks", "data"));
})->name('guest.comics');
