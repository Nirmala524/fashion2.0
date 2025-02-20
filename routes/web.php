<?php

use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BannerClothingController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BrandingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\HappyController;
use App\Http\Controllers\InsImagesController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrendsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserCheck;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.home');
// });
Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/shop', [UserController::class, 'shop']);
Route::get('/shopdetails/{id}', [UserController::class, 'shopdetails']);
Route::get('/category/{id}', [UserController::class, 'category']);
Route::get('/shopping-cart', [UserController::class, 'shopping']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/blog-details/{id}', [UserController::class, 'blogDetails']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/checkout', [UserController::class, 'checkout']);

################# Fetch Data ###################
Route::get('/fetch-product/{id}', [FetchDataController::class, 'fetchProduct'])->name('fetch.product');
Route::get('fetchAllProduct', [FetchDataController::class, 'fetchAllProduct'])->name('fetchAllProduct');
Route::get('fetch-category/{id}', [FetchDataController::class, 'fetchCategory'])->name('fetch.category');
Route::get('fetchAllCategory', [FetchDataController::class, 'fetchAllCategory'])->name('fetchAllCategory');
Route::get('fetch-brand/{id}', [FetchDataController::class, 'fetchBrand'])->name('fetch.brand');
Route::get('fetchAllBrand', [FetchDataController::class, 'fetchAllBrand'])->name('fetchAllBrand');


############# Customer Register #############

Route::get('/customregister', [CustomController::class, 'index'])->name('customregister');
Route::post('/customstore', [CustomController::class, 'store']);
Route::get('/customlogin', [CustomController::class, 'customlogin'])->name('customlogin');
Route::post('/loginstore', [CustomController::class, 'loginstore']);
Route::get('/logout', [CustomController::class, 'logout']);

############# Cart #############

Route::middleware(UserCheck::class)->group(function () {
    Route::post('addtocart', [CartController::class, 'index'])->name('addtocart');
    Route::get('addcart', [CartController::class, 'addcart']);
    Route::post('update-cart', [CartController::class, 'update'])->name('updateCart');
    Route::delete('/remove-from-cart/{productId}', [CartController::class, 'remove']);
});


Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ///////////// Admin Panel ////////////

    Route::get('admin/dashboard', [Admin::class, 'index']);
    Route::resource('admin/slider', SliderController::class);
    Route::resource('admin/trends', TrendsController::class);
    Route::resource('admin/InsImages', InsImagesController::class);
    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/tag', TagController::class);
    Route::resource('admin/size', SizeController::class);
    Route::resource('admin/brand', BrandingController::class);
    Route::resource('admin/about/team', TeamController::class);
    Route::resource('admin/about/partner', PartnerController::class);
    Route::resource('admin/about/happy', HappyController::class);
    Route::resource('admin/about/que', QueController::class);

    Route::prefix('admin/Blog')->group(function () {
        Route::get('/', [BlogController::class, 'index']);
        Route::post('/update', [BlogController::class, 'update']);
    });

    Route::prefix('admin/Comment')->group(function () {
        Route::get('/', [CommentController::class, 'index']);
        Route::post('/store', [CommentController::class, 'store']);
    });

    Route::prefix('admin/Blog')->group(function () {
        Route::get('/', [BlogController::class, 'index']);
        Route::post('/update', [BlogController::class, 'update']);
    });


    Route::prefix('admin/detail')->group(function () {
        Route::get('/', [DetailController::class, 'index']);
        Route::post('/update', [DetailController::class, 'update']);
    });

    Route::prefix('admin/BannerClothing')->group(function () {
        Route::get('/', [BannerClothingController::class, 'index']);
        Route::post('/update', [BannerClothingController::class, 'update']);
    });

    Route::prefix('admin/Accessories')->group(function () {
        Route::get('/', [AccessoriesController::class, 'index']);
        Route::post('/update', [AccessoriesController::class, 'update']);
    });

    Route::prefix('admin/Shoes')->group(function () {
        Route::get('/', [ShoesController::class, 'index']);
        Route::post('/update', [ShoesController::class, 'update']);
    });

    Route::prefix('admin/instagram')->group(function () {
        Route::get('/', [InstagramController::class, 'index']);
        Route::post('/update', [InstagramController::class, 'update']);
    });

    Route::prefix('admin/latests')->group(function () {
        Route::get('/', [FashionController::class, 'index']);
        Route::post('/update', [FashionController::class, 'update']);
    });

    Route::prefix('admin/bagBlack')->group(function () {
        Route::get('/', [ChestController::class, 'index']);
        Route::post('/update', [ChestController::class, 'update']);
    });

    Route::prefix('admin/contact')->group(function () {
        Route::get('/', [ContactController::class, 'index']);
        Route::post('/update', [ContactController::class, 'update']);
    });

    Route::prefix('admin/about/meet')->group(function () {
        Route::get('/', [MeetController::class, 'index']);
        Route::post('/update', [MeetController::class, 'update']);
    });

    Route::prefix('admin/setting')->group(function () {
        Route::get('/', [SettingController::class, 'index']);
        Route::post('/update', [SettingController::class, 'update']);
    });
});

require __DIR__ . '/auth.php';
