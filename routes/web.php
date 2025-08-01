<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Page\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Trang cần đăng nhập và phân quyền
Route::prefix('/admin')->name('admin.')->group(function(){
    
    Route::middleware(['auth', 'is_admin'])->group(function () {
        //dashboard
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
        // Lấy dữ liệu bài viết cho DataTable
         Route::get('/categories/data', [CategoriesController::class, 'getCategories'])->name('categories.data');
         // Thêm bài viết
         Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
 
         // Chỉnh sửa bài viết (lấy dữ liệu)
         Route::get('/categories/{categories}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
 
         // Cập nhật bài viết
         Route::post('/categories/{categories}', [CategoriesController::class, 'update'])->name('categories.update');
 
         // Xóa bài viết
         Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

         Route::get('/tags', [TagsController::class, 'index'])->name('tags');
        // Lấy dữ liệu bài viết cho DataTable
         Route::get('/tags/data', [TagsController::class, 'getTags'])->name('tags.data');
         // Thêm bài viết
         Route::post('/tags', [TagsController::class, 'store'])->name('tags.store');
 
         // Chỉnh sửa bài viết (lấy dữ liệu)
         Route::get('/tags/{tags}/edit', [TagsController::class, 'edit'])->name('tags.edit');
 
         // Cập nhật bài viết
         Route::post('/tags/{tags}', [TagsController::class, 'update'])->name('tags.update');
 
         // Xóa bài viết
         Route::delete('/tags/{tags}', [TagsController::class, 'destroy'])->name('tags.destroy');

         Route::get('/products', [ProductController::class, 'index'])->name('products.index');
         Route::post('/products/import', [ProductController::class, 'import'])->name('products.import');

        // Lấy dữ liệu bài viết cho DataTable
         Route::get('/products/data', [ProductController::class, 'getproducts'])->name('products.data');
         // Thêm bài viết
         Route::post('/products', [ProductController::class, 'store'])->name('products.store');
 
         // Chỉnh sửa bài viết (lấy dữ liệu)
         Route::get('/products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
 
         // Cập nhật bài viết
         Route::post('/products/{products}', [ProductController::class, 'update'])->name('products.update');
 
         // Xóa bài viết
         Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('products.destroy');

        // Danh sách bài viết
        Route::get('/comments', [AdminCommentController::class, 'index'])->name('comments');

        // Lấy dữ liệu bài viết cho DataTable
        Route::get('/comments/data', [AdminCommentController::class, 'getComments'])->name('comments.data');
        
        // Xóa bài viết
        Route::delete('/comments/{post}', [AdminCommentController::class, 'destroy'])->name('comments.destroy');
         

         
    });
});
// trang cần đăng nhập
Route::middleware(['auth'])->group(function(){
    //logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
});
// Không cần phải đăng nhập
Route::get('/comments/{product_id}', [CommentController::class, 'getComments']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'register']);
Route::get('/', [PageController::class, 'index']);
Route::get('/categories/{category}/products', [PageController::class, 'productsByCategory'])
    ->name('categories.products');
Route::get('/product-detail/{id}', [PageController::class, 'productDetail'])->name('product.detail');
Route::get('/productbytag/{tag}', [PageController::class, 'productsByTag'])->name('products.byTag');

