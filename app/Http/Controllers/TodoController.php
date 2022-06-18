<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return 'index';
    }

    public function show($id)
    {
        return 'show';
    }

    public function store(Request $request)
    {
        return 'store';
    }

    public function update(Request $request, $id)
    {
        return 'update';
    }

    public function destroy($id)
    {
        return 'destroy';
    }
}
