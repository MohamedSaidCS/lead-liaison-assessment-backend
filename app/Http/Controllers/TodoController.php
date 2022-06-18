<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Retrieve all Todos.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Todo::all());
    }

    /**
     * Retrieve a single Todo.
     *
     * @param Todo $todo
     * @return JsonResponse
     */
    public function show(Todo $todo): JsonResponse
    {
        return response()->json($todo);
    }

    /**
     * Create a Todo.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json('store');
    }

    /**
     * Update a Todo.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        return response()->json('update');
    }

    /**
     * Delete a Todo.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json('destroy');
    }
}
