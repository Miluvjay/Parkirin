<?php

namespace App\Http\Controllers;

use App\Models\Malls;
use App\Models\Explorer;
use App\Http\Requests\StoreExplorerRequest;
use App\Http\Requests\UpdateExplorerRequest;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('explorer.index')->with([
            'malls' => Malls::all()
        ]);
        // return view('explorer.index');
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $malls = Malls::where('city', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $malls = Malls::all();
        }
        return view('explorer.searchMall', ['malls' => $malls]);
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
    public function store(StoreExplorerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Explorer $explorer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Explorer $explorer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExplorerRequest $request, Explorer $explorer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Explorer $explorer)
    {
        //
    }
}
