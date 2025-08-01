<?php
namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('tag')
            ->orderBy('tag_id')
            ->get();

        $groupedProducts = $products
            ->groupBy(fn($product) => optional($product->tag)->chiTietLoaiGoiCuoc)
            ->map(fn($group) => $group->take(10)); // chỉ lấy 10 product mỗi nhóm

        return view('page.home', compact('groupedProducts', 'products'));
    }
    public function productsByCategory($categoryId)
    {
        // Lấy danh mục theo ID, kèm theo các thẻ và sản phẩm của từng thẻ
        $category = Categories::with('tags.products')->findOrFail($categoryId);

        return view('page.product_categopry', compact('category'));
    }
    public function productDetail($id)
    {
        $product = Product::with('tag', 'tag.category')->findOrFail($id);

        // Nếu bạn có nhiều gói khác cùng tag hoặc category
        $related = Product::where('id', '!=', $id)
            ->where('tag_id', $product->tag_id)
            ->limit(3)
            ->get();

        return view('page.product-detail', compact('product', 'related'));
    }

    public function productsByTag($tag)
    {
        $products = Product::whereHas('tag', function ($query) use ($tag) {
            $query->where('chiTietLoaiGoiCuoc', $tag);
        })->get();

        return view('page.productbyTag', compact('products', 'tag'));
    }

}
