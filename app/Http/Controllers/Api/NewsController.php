<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query();

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        if ($request->has('search') && strlen($request->search) >= 2) {
            $query->where('title', 'ilike', "%{$request->search}%");
        }
        if ($request->has('date_from') && $request->date_from) {
            $query->where('date', '>=', $request->date_from);
        }
        if ($request->has('date_to') && $request->date_to) {
            $query->where('date', '<=', $request->date_to);
        }

        $limit = min($request->input('limit', 20), 100);
        $offset = $request->input('offset', 0);

        $total = $query->count();
        $news = $query->orderBy('date', 'desc')
                      ->offset($offset)
                      ->limit($limit)
                      ->get();

        return response()->json([
            'data' => NewsResource::collection($news),
            'meta' => [
                'total' => $total,
                'offset' => (int)$offset,
                'limit' => (int)$limit,
            ],
        ]);
    }

    public function show($id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json([
                'error' => ['code' => 'NOT_FOUND', 'message' => 'News not found']
            ], 404);
        }
        return response()->json(['data' => new NewsResource($news)]);
    }
}