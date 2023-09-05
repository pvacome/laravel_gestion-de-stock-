<?php

namespace App\Http\Controllers;
use App\Models\inventory;
use App\Models\product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventory=inventory::all();
        return view('inventory.index',compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=product::all();
        return view('inventory.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Designation'=> 'required',
            'ExpirationDate'=> 'required',
            'QuantityInStock'=> 'required',
            'StockAvailable'=> 'required',
            'UnitPrice'=> 'required',
            'ActualStockValue'=> 'required',
            'DeviationValue'=> 'required',
            'Observation'=> 'required',

        ]);
        $data=$request->all();
        inventory::create($data);
        return redirect('inventory')->with('status','inventaire ajouter avec success');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::all();

        $inventory = Inventory::find($id);

        return view('inventory.show',compact('inventory','product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=product::all();
        $inventory = inventory::find($id);
        return view('inventory.edit', compact('inventory','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'Designation'=> 'required',
            'ExpirationDate'=> 'required',
            'QuantityInStock'=> 'required',
            'StockAvailable'=> 'required',
            'UnitPrice'=> 'required',
            'ActualStockValue'=> 'required',
            'DeviationValue'=> 'required',
            'Observation'=> 'required',
        ]);

        $data = $request->all();
        $inventory = Inventory::find($id);
        $inventory->update($data);
        return redirect('inventory')->with('status','inventaire modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inventory::destroy($id);
        return redirect('inventory');
    }
}
