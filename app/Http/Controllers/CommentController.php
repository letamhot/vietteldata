<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        $comment = Comment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'content' => $request->content,
            'parent_id' => $request->parent_id ?? null // Đảm bảo không có lỗi nếu không có parent_id
        ]);

        return response()->json(['success' => true, 'comment' => $comment]);
    }


    public function getComments($productId)
    {
        $comments = Comment::where('product_id', $productId)
            ->whereNull('parent_id') // Chỉ lấy comment gốc
            ->with('user', 'replies.user') // Lấy luôn replies và user
            ->get();

        return response()->json($comments);
    }

}

