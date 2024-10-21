
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SecurityScanner;

Route::middleware([SecurityScanner::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    // إضافة المزيد من التوجيهات هنا
});
