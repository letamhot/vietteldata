<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all(); // Lấy tất cả loại bài viết
        return view('admin.tags.index', compact('categories'));
    }

    public function getTags()
    {
        $tags = Tags::with(['category'])->latest()->get();
        return response()->json(['data' => $tags]);
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
        $request->validate([
            'chiTietLoaiGoiCuoc' => 'required|string|max:255',
            'moTa' => 'string',
            'category_id' => 'required|exists:categories,id' // Validate categories
        ]);
        
        $tag = Tags::create([
            'chiTietLoaiGoiCuoc' => $request->chiTietLoaiGoiCuoc,
            'moTa' => $request->moTa,
            'category_id' => $request->category_id, // Lưu category_id vào DB
        ]);
    
        return response()->json($tag);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tags $tags)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tags $tags)
    {
        return response()->json($tags);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tags $tags)
    {
        $request->validate([
            'chiTietLoaiGoiCuoc' => 'required|string|max:255',
            'moTa' => 'string',
            'category_id' => 'required|exists:categories,id' // Validate categories
        ]);
    
        
        $tags->update([
            'chiTietLoaiGoiCuoc' => $request->chiTietLoaiGoiCuoc,
            'moTa' => $request->moTa,
            'category_id' => $request->category_id, // Lưu category_id vào DB
        ]);
    
        return response()->json($tags);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tags)
    {
         $tags->delete();

        return response()->json(['message' => 'Tag deleted successfully']);
    }
}
