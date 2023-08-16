<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = category::all();
        return view("category.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|min:1"
        ]);

        // category::
        $category = new category();
        $category->name = $request->name;
        $category->save();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "edit";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "update";

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect("category");
    }
}
