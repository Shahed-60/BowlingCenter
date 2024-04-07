<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\PretPakketten;
use Illuminate\Http\Request;

class PretPakkettenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return View('pret-pakketten.index');
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
    public function show(PretPakketten $pretPakketten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PretPakketten $pretPakketten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PretPakketten $pretPakketten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PretPakketten $pretPakketten)
    {
        //
    }
}
