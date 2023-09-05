<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imprimer;
use App\Models\Product;
use App\Models\bill;
use App\Models\ProductBill;
use App\Models\customer;


class ImprimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $product = product::all();
        return view('imprimer.create',compact('product', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request,[

        ]);


        $produc = Product::find($request->product);

        if($produc->Quantity >= $request->Quantity){
            $productBill = ProductBill::where('product', $produc->id)->where('bill', $request->bill_id)->first();
            if($productBill != null){
                $productBill->quantity = $productBill->quantity + $request->Quantity;
                $productBill->save();
                $produc->Quantity = $produc->Quantity - $request->Quantity;
                $produc->save();
            }else{
                $productBill = new ProductBill();
                $productBill->quantity = $request->Quantity;
                $productBill->bill = $request->bill_id;
                $productBill->product = $request->product;
                $productBill->save();
                $produc->Quantity = $produc->Quantity - $request->Quantity;
                $produc->save();
            }
            return redirect('bill/'.$request->bill_id)->with('status','stock disponible');
        }else{
            return redirect('bill/'.$request->bill_id)->with('status','stock insuffisant');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $imprimers = Imprimer::find($id);
          $bill = bill::all();
          $customer = customer::all();

          return view('imprimer.show',compact('imprimers','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
