<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupportProgramResource;
use App\Models\SupportProgram;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Request $request)
    {
        $query = SupportProgram::query();

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        if ($request->has('search') && strlen($request->search) >= 2) {
            $query->where('title', 'ilike', "%{$request->search}%");
        }
        if ($request->boolean('active_only', false)) {
            $query->where(function ($q) {
                $q->where('deadline', '>=', now())
                  ->orWhereNull('deadline');
            });
        }

        $limit = min($request->input('limit', 20), 100);
        $offset = $request->input('offset', 0);

        $total = $query->count();
        $programs = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'data' => SupportProgramResource::collection($programs),
            'meta' => [
                'total' => $total,
                'offset' => (int)$offset,
                'limit' => (int)$limit,
            ],
        ]);
    }

    public function show($id)
    {
        $program = SupportProgram::find($id);
        if (!$program) {
            return response()->json([
                'error' => ['code' => 'NOT_FOUND', 'message' => 'Support program not found']
            ], 404);
        }
        return response()->json(['data' => new SupportProgramResource($program)]);
    }
}