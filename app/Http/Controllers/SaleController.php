<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale=sale::all();
        return view('sale.index',compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sale=sale::all();
        return view('sale.create',compact('sale'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $this->validate($request,[
            'Tilte'=> 'required',
            'Type'=> 'required',
            'Status'=> 'required',
            'Description'=> 'required',
            'Mark'=> 'required',
            // 'Color'=> 'required',
            'Size'=> 'required',
        ]);
        $data=$request->all();
        sale::create($data);
        return redirect('sale')->with('status','vente ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale=sale::all();
        return view('sale.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Tilte'=> 'required',
            'Type'=> 'required',
            'Status'=> 'required',
            'Description'=> 'required',
            'Mark'=> 'required',
            // 'Color'=> 'required',
            'Size'=> 'required',
        ]);
        $data = $request->all();
        $sale = Sale::find($id);
        $sale->update($data);
        return redirect('sale')->with('status','vente modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sale::destroy($id);
        return redirect('sale');
    }
}
