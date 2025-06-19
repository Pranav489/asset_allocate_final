<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProductInquiryController;



Route::post('/contactform', [ContactFormController::class, 'store']);

Route::post('/product-inquiry', [ProductInquiryController::class, 'store']);