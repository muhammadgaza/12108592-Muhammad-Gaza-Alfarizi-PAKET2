<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;



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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Route::middleware("isLogin")->group(function () {

Route::get("/dashboard/product", [ProductController::class, "index"])->name("product");
Route::get("/dashboard/product/create", [ProductController::class, "create"])->name("product.create");
Route::post("/dashboard/product/store", [ProductController::class, "store"])->name("product.store");
Route::get("/dashboard/product/edit/{id}", [ProductController::class, "edit"])->name("product.edit");
Route::patch("/dashboard/product/update/{id}", [ProductController::class, "update"])->name("product.update");
Route::get("/dashboard/product/updateStock/{id}", [ProductController::class, "stockView"])->name("product.updateStockView");
Route::patch("/dashboard/product/updateStock/{id}", [ProductController::class, "updateStock"])->name("product.updateStock");
Route::delete("/dashboard/product/destroy/{id}", [ProductController::class, "destroy"])->name("product.destroy");

Route::get("/dashboard/sale", [SaleController::class, "index"])->name("sale");
Route::get("/dashboard/sale/export", [SaleController::class, "export"])->name("export");
Route::get("/dashboard/sale/pdf", [SaleController::class, "pdf"])->name("pdf");
Route::get("/dashboard/sale/download/{id}", [SaleController::class, "download"])->name("sale.download");
Route::get("/dashboard/sale/invoice", [SaleController::class, "invoiceView"])->name("sale.invoiceView");
Route::post("/dashboard/sale/invoiceStore", [SaleController::class, "invoice"])->name("sale.invoice");
Route::get("/dashboard/sale/edit/{id}", [SaleController::class, "edit"])->name("sale.edit");
Route::patch("/dashboard/sale/update/{id}", [SaleController::class, "update"])->name("sale.update");
Route::delete("/dashboard/sale/destroy/{id}", [SaleController::class, "destroy"])->name("sale.destroy");
Route::get("/dashboard/sale/create", [SaleController::class, "create"])->name("sale.create");
Route::post("/dashboard/sale/store", [SaleController::class, "store"])->name("sale.store");
// });



// require __DIR__ . '/auth.php';
