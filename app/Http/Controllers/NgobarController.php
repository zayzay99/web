<?php

namespace App\Http\Controllers;

use App\Models\ngobar;
use Illuminate\Http\Request;

class NgobarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ngobars.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ngobar $ngobar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ngobar $ngobar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ngobar $ngobar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ngobar $ngobar)
    {
        //
    }
}
