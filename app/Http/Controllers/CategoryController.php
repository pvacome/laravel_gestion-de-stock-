<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=category::all();
        return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=category::all();
        return view('category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Tilte'=> 'required',
            'Type'=> 'required',
            'Dimensions'=> 'required',
            'Material'=> 'required',

        ]);

        $data=$request->all();
        category::create($data);
        return redirect('category')->with('status','categories ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = Category::find($id);

        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category.edit',compact('category'))->with('status','categories modifier avec success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Tilte'=> 'required',
            'Type'=> 'required',
            'Dimensions'=> 'required',
            'Material'=> 'required',

        ]);
        $data = $request->all();
        $category = Category::find($id);
        $category->update($data);
        return redirect('category');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Category::destroy($id);
        return redirect('category');
    }
}
