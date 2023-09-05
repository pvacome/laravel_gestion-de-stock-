<?php

namespace App\Http\Controllers;
use App\Models\bill;
use App\Models\customer;
use App\Models\ProductBill;
use App\Models\imprimer;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function imprimers()
    {

        return view('bill.imprimers');

    }
    public function index()
    {

        $bills=bill::all();
        return view('bill.index',compact('bills'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=customer::all();
        $bill=bill::all();



        return view('bill.create',compact('bill','customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Number'=> 'required',
            'date'=> 'required',


        ]);

        $data=$request->all();
        bill::create($data);
        return redirect('bill')->with('status','facture ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bill = Bill::find($id);
        $prixTotal = 0;
        $data = [];
        $i = -1;
        foreach ($bill->products as $product) {
            $quantity = ProductBill::where('product', $product->id)->where('bill', $bill->id)->first()->quantity;
            $prixTotal = $prixTotal + ($product->UnitPrice * $quantity);
            $data[$i++] = [
                'id' => $product->id,
                'Name' => $product->Name,
                'UnitPrice' => $product->UnitPrice,
                'Quantity' => $quantity,
            ];
        }
        $bill->products = $data;
        // dd($bill->products);
        return view('bill.show',compact('bill', 'prixTotal'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bill = Bill::find($id);
        $customer=customer::all();

        return view('bill.edit',compact('bill','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'Number'=> 'required',
           'date'=> 'required',
        ]);
        $data = $request->all();
        $bill = Bill::find($id);
        $bill->update($data);
        return redirect('bill')->with('status','facture modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bill::destroy($id);
        return redirect('bill');
    }

}
