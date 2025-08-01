<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.categories.index');

    }
    public function getCategories()
    {
        
        $categories = Categories::all();
        return response()->json(['data' => $categories]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenLoaiGoiCuoc' => 'required|string|max:255',
            'moTa' => 'string',
        ]);    
        $category = Categories::create([
            'tenLoaiGoiCuoc' => $request->tenLoaiGoiCuoc,
            'moTa' => $request->moTa
        ]);
    
        return response()->json($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        return response()->json($categories);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'tenLoaiGoiCuoc' => 'required|string|max:255',
            'moTa' => 'string',
        ]);
    
        $categories->update([
            'tenLoaiGoiCuoc' => $request->tenLoaiGoiCuoc,
            'moTa' => $request->moTa
        ]);
    
        return response()->json($categories);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();

        return response()->json(['message' => 'Categories deleted successfully']);
    }

    public function destroyMany(Request $request)
    {
        $ids = $request->input('ids');

        Categories::whereIn('id', $ids)->delete();

        return response()->json(['message' => 'Categories deleted successfully']);
    }

}
