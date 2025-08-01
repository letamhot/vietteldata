<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tags;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tags::all(); // Lấy tất cả loại bài viết
        return view('admin.products.index', compact('tags'));
    }
    public function getProducts()
    {
        $products = Product::with(['tag'])->latest()->get();
        return response()->json(['data' => $products]);
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
            'tenGoiCuoc' => 'required|string|max:255',
            'giaTien'    => 'string',
            'cuPhap'     => 'string',
            'moTa'       => 'string',
            'tag_id'     => 'required|exists:tags,id', // Validate tags
        ]);

        $product = Product::create([
            'tenGoiCuoc' => $request->tenGoiCuoc,
            'giaTien'    => $request->giaTien,
            'dungLuong'  => $request->dungLuong,
            'huongDan'   => $request->huongDan,
            'cuPhap'     => $request->cuPhap,
            'moTa'       => $request->moTa,
            'tag_id'     => $request->tag_id, // Lưu tag_id vào DB
        ]);

        return response()->json($product);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $file        = $request->file('file');
        $spreadsheet = IOFactory::load($file->getRealPath());
        $rows        = $spreadsheet->getActiveSheet()->toArray();
        //dd($rows);
        $imported = 0;
        $skipped  = 0;

        foreach ($rows as $index => $row) {
            if ($index === 0) {
                continue;
            }

            if (empty($row[0])) {
                $skipped++;
                continue;
            }

            Product::create([
                'tenGoiCuoc' => $row[0],
                'giaTien'    => $row[1] ?? 0,
                'dungLuong'  => $row[2] ?? '',
                'huongDan'   => $row[3] ?? '',
                'cuPhap'     => $row[4] ?? '',
                'moTa'       => $row[5] ?? '',
                'tag_id'     => $row[6] ?? null,
            ]);
            $imported++;
        }

        return redirect()->route('admin.products.index')->with('success', "Đã import $imported dòng, bỏ qua $skipped dòng thiếu dữ liệu.");

    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $products)
    {
        $request->validate([
            'tenGoiCuoc' => 'required|string|max:255',
            'giaTien'    => 'string',
            'cuPhap'     => 'string',
            'moTa'       => 'string',
            'tag_id'     => 'required|exists:tags,id', // Validate tags
        ]);
        $products->update([
            'tenGoiCuoc' => $request->tenGoiCuoc,
            'giaTien'    => $request->giaTien,
            'dungLuong'  => $request->dungLuong,
            'huongDan'   => $request->huongDan,
            'cuPhap'     => $request->cuPhap,
            'moTa'       => $request->moTa,
            'tag_id'     => $request->tag_id, // Lưu tag_id vào DB
        ]);

        return response()->json($products);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        $products->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
