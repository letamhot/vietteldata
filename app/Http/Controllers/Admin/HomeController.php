<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalCategory = Categories::count(); // Đếm tổng số loại gói cước
        $totalTag= Tags::count(); // Đếm tổng số loại gói cước
        
        $totalProduct = Product::count(); // Đếm tổng số bài viết
        $totalComments = Comment::count(); // Đếm tổng số comment
        $totalUsers = User::count(); // Đếm tổng số comment
        $totalReplies = Comment::whereNotNull('parent_id')->count();

        return view('admin.index', compact("totalCategory","totalProduct","totalComments", "totalReplies","totalUsers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
