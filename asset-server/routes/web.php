<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Api\IntroductionController;
// use App\Http\Controllers\Api\CorporateServiceController;
use Illuminate\Http\Request;
// use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\FaqController;
//use App\Http\Controllers\Api\WhyUsController;
// use App\Http\Controllers\Api\ReviewController;
// use App\Http\Controllers\Api\ServiceController;
// use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
// use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\api\HeroItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\api\WhyUsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductFaqController;
use App\Http\Controllers\InsuranceSolutionController;
use App\Http\Controllers\InsuranceController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hero-slides', function() {
//     return \App\Models\HeroSlide::where('is_active', true)
//         ->orderBy('order', 'asc')
//         ->get();
// });

// routes/api.php
// Route::get('/api/about-us', function () {
//     $about = AboutUs::first();
    
       
 
Route::get('/api/blog/category/{category}', [BlogController::class, 'byCategory']);
Route::get('/api/blog/{slug}', [BlogController::class, 'show']);



Route::get('/api/hero-items', [HeroItemController::class, 'index']);
Route::get('/api/why-us', [WhyUsController::class, 'index']);
Route::get('/api/contact', [ContactController::class, 'index']);
Route::get('/api/about-us', [AboutUsController::class, 'index']);
Route::get('/api/reviews', [ReviewController::class, 'index']);
Route::get('/api/faqs', [FaqController::class, 'index']);
Route::get('/api/productfaq', [productFaqController::class, 'index']); 
Route::get('/api/insurance-solutions', [InsuranceSolutionController::class, 'index']);
Route::get('/api/insurance-types', [InsuranceController::class, 'index']);



// routes/api.php

   