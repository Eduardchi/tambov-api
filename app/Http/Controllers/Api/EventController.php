<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::query();

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        if ($request->has('city') && $request->city) {
            $query->where('location', $request->city);
        }
        if ($request->has('search') && strlen($request->search) >= 2) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'ilike', "%{$search}%")
                  ->orWhere('location', 'ilike', "%{$search}%");
            });
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
        $events = $query->orderBy('date', 'desc')
                        ->offset($offset)
                        ->limit($limit)
                        ->get();

        return response()->json([
            'data' => EventResource::collection($events),
            'meta' => [
                'total' => $total,
                'offset' => (int)$offset,
                'limit' => (int)$limit,
            ],
        ]);
    }

    public function show($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json([
                'error' => ['code' => 'NOT_FOUND', 'message' => 'Event not found']
            ], 404);
        }
        return response()->json(['data' => new EventResource($event)]);
    }
}