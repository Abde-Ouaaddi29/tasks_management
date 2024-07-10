<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class ControllerTodo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return 'api list';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store list';
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return 'show todo';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
