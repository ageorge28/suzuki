<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\BranchController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/language/english', [LanguageController::class, 'english'])->name('language.english');
Route::get('/language/malayalam', [LanguageController::class, 'malayalam'])->name('language.malayalam');

Route::get('/motorcycles', [HomeController::class, 'motorcycles'])->name('motorcycles');

Route::get('/motorcycles/{slug}', [ShopController::class, 'category'])->name('motorcycles.category');

Route::get('/motorcycle/{slug}', [ShopController::class, 'show'])->name('motorcycles.show');

Route::get('/accessories', [HomeController::class, 'accessories'])->name('accessories');

Route::get('/accessories/{slug}', [ShopController::class, 'accessories'])->name('accessories.subcategory');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/workshop', [HomeController::class, 'workshop'])->name('workshop');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact/send', [HomeController::class, 'sendMail'])->name('contact.send');

Route::prefix('admin')->group(function() {

    Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');

    Route::get('/profile', [AdminController::class, 'show'])->middleware(['auth'])->name('admin.profile');
    Route::get('/profile/edit', [AdminController::class, 'edit'])->middleware(['auth'])->name('admin.profile.edit');
    Route::post('/profile/update', [AdminController::class, 'update'])->middleware(['auth'])->name('admin.profile.update');

    Route::get('/site', [SiteController::class, 'show'])->middleware(['auth'])->name('admin.site');
    Route::get('/site/edit', [SiteController::class, 'edit'])->middleware(['auth'])->name('admin.site.edit');
    Route::post('/site/update', [SiteController::class, 'update'])->middleware(['auth'])->name('admin.site.update');

    Route::get('/banners', [BannerController::class, 'index'])->middleware(['auth'])->name('admin.banners');
    Route::post('/banners/store', [BannerController::class, 'store'])->middleware(['auth'])->name('admin.banners.store');
    Route::get('/banners/edit/{banner}', [BannerController::class, 'edit'])->middleware(['auth'])->name('admin.banners.edit');
    Route::put('/banners/update/{banner}', [BannerController::class, 'update'])->middleware(['auth'])->name('admin.banners.update');
    Route::get('/banners/delete/{banner}', [BannerController::class, 'destroy'])->middleware(['auth'])->name('admin.banners.delete');

    Route::get('/sliders', [SliderController::class, 'index'])->middleware(['auth'])->name('admin.sliders');
    Route::post('/sliders/store', [SliderController::class, 'store'])->middleware(['auth'])->name('admin.sliders.store');
    Route::get('/sliders/edit/{slider}', [SliderController::class, 'edit'])->middleware(['auth'])->name('admin.sliders.edit');
    Route::put('/sliders/update/{slider}', [SliderController::class, 'update'])->middleware(['auth'])->name('admin.sliders.update');
    Route::get('/sliders/delete/{slider}', [SliderController::class, 'destroy'])->middleware(['auth'])->name('admin.sliders.delete');

    Route::get('/categories', [CategoryController::class, 'index'])->middleware(['auth'])->name('admin.categories');
    Route::post('/categories/store', [CategoryController::class, 'store'])->middleware(['auth'])->name('admin.categories.store');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->middleware(['auth'])->name('admin.categories.edit');
    Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->middleware(['auth'])->name('admin.categories.update');
    Route::get('/categories/delete/{category}', [CategoryController::class, 'destroy'])->middleware(['auth'])->name('admin.categories.delete');

    Route::get('/subcategories', [SubcategoryController::class, 'index'])->middleware(['auth'])->name('admin.subcategories');
    Route::post('/subcategories/store', [SubcategoryController::class, 'store'])->middleware(['auth'])->name('admin.subcategories.store');
    Route::get('/subcategories/edit/{subcategory}', [SubcategoryController::class, 'edit'])->middleware(['auth'])->name('admin.subcategories.edit');
    Route::put('/subcategories/update/{subcategory}', [SubcategoryController::class, 'update'])->middleware(['auth'])->name('admin.subcategories.update');
    Route::get('/subcategories/delete/{subcategory}', [SubcategoryController::class, 'destroy'])->middleware(['auth'])->name('admin.subcategories.delete');
    Route::get('/subcategories/deactivate/{subcategory}', [SubcategoryController::class, 'deactivate'])->middleware(['auth'])->name('admin.subcategories.deactivate');
    Route::get('/subcategories/activate/{subcategory}', [SubcategoryController::class, 'activate'])->middleware(['auth'])->name('admin.subcategories.activate');
    Route::get('/subcategories/ajax/{category_id}', [SubcategoryController::class, 'ajax'])->middleware(['auth'])->name('admin.subcategories.ajax');

    Route::get('/branches', [BranchController::class, 'index'])->middleware(['auth'])->name('admin.branches');
    Route::post('/branches/store', [BranchController::class, 'store'])->middleware(['auth'])->name('admin.branches.store');
    Route::get('/branches/edit/{branch}', [BranchController::class, 'edit'])->middleware(['auth'])->name('admin.branches.edit');
    Route::put('/branches/update/{branch}', [BranchController::class, 'update'])->middleware(['auth'])->name('admin.branches.update');
    Route::get('/branches/delete/{branch}', [BranchController::class, 'destroy'])->middleware(['auth'])->name('admin.branches.delete');

    Route::get('/motorcycles', [MotorcycleController::class, 'index'])->middleware(['auth'])->name('admin.motorcycles');
    Route::get('/motorcycles/create', [MotorcycleController::class, 'create'])->middleware(['auth'])->name('admin.motorcycles.create');
    Route::post('/motorcycles/store', [MotorcycleController::class, 'store'])->middleware(['auth'])->name('admin.motorcycles.store');
    Route::get('/motorcycles/edit/{motorcycle}', [MotorcycleController::class, 'edit'])->middleware(['auth'])->name('admin.motorcycles.edit');
    Route::put('/motorcycles/update/{motorcycle}', [MotorcycleController::class, 'update'])->middleware(['auth'])->name('admin.motorcycles.update');
    Route::post('/motorcycles/updateImages/{motorcycle}', [MotorcycleController::class, 'updateImages'])->middleware(['auth'])->name('admin.motorcycles.update.images');
    Route::get('/motorcycles/delete/{motorcycle}', [MotorcycleController::class, 'destroy'])->middleware(['auth'])->name('admin.motorcycles.delete');
    Route::get('/motorcycles/deleteImage/{photo}', [MotorcycleController::class, 'deleteImage'])->middleware(['auth'])->name('admin.motorcycles.delete.image');
    Route::get('/motorcycles/deactivate/{motorcycle}', [MotorcycleController::class, 'deactivate'])->middleware(['auth'])->name('admin.motorcycles.deactivate');
    Route::get('/motorcycles/activate/{motorcycle}', [MotorcycleController::class, 'activate'])->middleware(['auth'])->name('admin.motorcycles.activate');

    Route::get('/seo', [SeoController::class, 'show'])->middleware(['auth'])->name('admin.seo');
    Route::get('/seo/edit', [SeoController::class, 'edit'])->middleware(['auth'])->name('admin.seo.edit');
    Route::post('/seo/update', [SeoController::class, 'update'])->middleware(['auth'])->name('admin.seo.update');

    Route::get('/accessories', [AccessoryController::class, 'index'])->middleware(['auth'])->name('admin.accessories');
    Route::post('/accessories/store', [AccessoryController::class, 'store'])->middleware(['auth'])->name('admin.accessories.store');
    Route::get('/accessories/edit/{accessory}', [AccessoryController::class, 'edit'])->middleware(['auth'])->name('admin.accessories.edit');
    Route::put('/accessories/update/{accessory}', [AccessoryController::class, 'update'])->middleware(['auth'])->name('admin.accessories.update');
    Route::get('/accessories/delete/{accessory}', [AccessoryController::class, 'destroy'])->middleware(['auth'])->name('admin.accessories.delete');
    Route::get('/accessories/deactivate/{accessory}', [AccessoryController::class, 'deactivate'])->middleware(['auth'])->name('admin.accessories.deactivate');
    Route::get('/accessories/activate/{accessory}', [AccessoryController::class, 'activate'])->middleware(['auth'])->name('admin.accessories.activate');

    Route::get('/about', [AboutController::class, 'show'])->middleware(['auth'])->name('admin.about');
    Route::get('/about/edit', [AboutController::class, 'edit'])->middleware(['auth'])->name('admin.about.edit');
    Route::post('/about/update', [AboutController::class, 'update'])->middleware(['auth'])->name('admin.about.update');

    Route::get('/reviews', [ReviewController::class, 'index'])->middleware(['auth'])->name('admin.reviews');
    Route::post('/reviews/store', [ReviewController::class, 'store'])->middleware(['auth'])->name('admin.reviews.store');
    Route::get('/reviews/edit/{review}', [ReviewController::class, 'edit'])->middleware(['auth'])->name('admin.reviews.edit');
    Route::put('/reviews/update/{review}', [ReviewController::class, 'update'])->middleware(['auth'])->name('admin.reviews.update');
    Route::get('/reviews/delete/{review}', [ReviewController::class, 'destroy'])->middleware(['auth'])->name('admin.reviews.delete');

    Route::get('/workshop', [WorkshopController::class, 'show'])->middleware(['auth'])->name('admin.workshop');
    Route::get('/workshop/edit', [WorkshopController::class, 'edit'])->middleware(['auth'])->name('admin.workshop.edit');
    Route::post('/workshop/update', [WorkshopController::class, 'update'])->middleware(['auth'])->name('admin.workshop.update');

});

require __DIR__.'/auth.php';

Route::get('/sitemap.xml', [SitemapController::class, 'index']);