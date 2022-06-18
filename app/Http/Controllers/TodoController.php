<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TodoController extends Controller
{
    /**
     * Retrieve all Todos.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json('index');
    }

    /**
     * Retrieve a single Todo.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json('show');
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
