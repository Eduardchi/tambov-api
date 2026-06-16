<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryAlbumResource;
use App\Http\Resources\PhotoResource;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $limit = min($request->input('limit', 20), 100);
        $offset = $request->input('offset', 0);

        $total = GalleryAlbum::count();
        $albums = GalleryAlbum::with('photos')
                              ->offset($offset)
                              ->limit($limit)
                              ->get();

        return response()->json([
            'data' => GalleryAlbumResource::collection($albums),
            'meta' => [
                'total' => $total,
                'offset' => (int)$offset,
                'limit' => (int)$limit,
            ],
        ]);
    }

    public function show($id)
    {
        $album = GalleryAlbum::with('photos')->find($id);
        if (!$album) {
            return response()->json([
                'error' => ['code' => 'NOT_FOUND', 'message' => 'Album not found']
            ], 404);
        }

        return response()->json([
            'data' => [
                'id' => $album->id,
                'title' => $album->title,
                'date' => $album->date->format('Y-m-d'),
                'photoCount' => $album->photos->count(),
                'coverUrl' => $album->cover_url,
                'photos' => PhotoResource::collection($album->photos),
            ]
        ]);
    }
}