<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    //profile admin
    Route::get('/admin/profile', [AdminController::class, 'admindashboard'])->name('dash.admin');
    Route::post('/admin/profile/store', [AdminController::class, 'adminprofilestore'])->name('profile.admin.store');

    //user
    Route::get('/user-list', [EditUserController::class, 'showUser'])->name('showsuser');
    Route::get('/user/edit/{id}', [EditUserController::class, 'edituser'])->name('edituser');
    Route::post('/user/update/{id}', [EditUserController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/user/hapus/{id}', [EditUserController::class, 'hapususer'])->name('hapususer');

    //kategori
    Route::get('/admin/kategori', [KategoriController::class, 'showKat'])->name('showskat');
    Route::get('/tambah_kat', [KategoriController::class, 'tambahkat'])->name('tambahkat');
    Route::post('/add_kat', [KategoriController::class, 'addkat'])->name('addkat');
    Route::get('/admin/kategori/edit/{id}', [KategoriController::class, 'editKat'])->name('editKat');
    Route::post('/admin/kategori/update/{id}', [KategoriController::class, 'updateKat'])->name('updateKat');
    Route::get('/admin/kategori/hapus/{id}', [KategoriController::class, 'hapusKat'])->name('hapusKat');

    //produk
    Route::get('/admin/produk', [ProdukController::class, 'showProd'])->name('showsprod');
    Route::get('/tambah_prod', [ProdukController::class, 'tambahprod'])->name('tambahprod');
    Route::post('/add_prod', [ProdukController::class, 'addprod'])->name('addprod');
    Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'editProd'])->name('editprod');
    Route::post('/admin/produk/update/{id}', [ProdukController::class, 'updateprod'])->name('updateprod');
    Route::get('/admin/produk/hapus/{id}', [ProdukController::class, 'hapusprod'])->name('hapusprod');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/homepage', function () {
        return view('pembeli.homepage.content');
    })->name('homepage');
    Route::get('/daycare', function () {
        return view('pembeli.daycare.content');
    })->name('daycare');
    Route::get('/404', function () {
        return view('pembeli.error.index');
    })->name('error');
    Route::get('/shop', function () {
        return view('pembeli.shop.content');
    })->name('shop');
    Route::get('/product', function () {
        return view('pembeli.product.content');
    })->name('product');
    Route::get('/cart', function () {
        return view('pembeli.cart.content');
    })->name('cart');
    Route::get('/checkout', function () {
        return view('pembeli.checkout.content');
    })->name('checkout');
    Route::get('/blogs', function () {
        return view('pembeli.blogs.content');
    })->name('blogs');
    Route::get('/blog', function () {
        return view('pembeli.blog.content');
    })->name('blog');
    Route::get('/contact-us', function () {
        return view('pembeli.contact-us.content');
    })->name('contact-us');
});