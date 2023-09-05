<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\customer;
use App\Models\product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = order::all();

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order=order::all();
        $customer = customer::all();
        $product = product::all();
        return view('order.create',compact('order','customer','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Quantity' =>'required',
            'UnitPrice' =>'required',
            'TotalPrice'=> 'required',

        ]);

        $data=$request->all();
        order::create($data);
        return redirect('order')->with('status','commande ajouter avec success');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);

        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order=order::find($id);
        $product=product::all();
        $customer=customer::all();
        return view('order.edit',compact('order','product','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Quantity' =>'required',
            'UnitPrice' =>'required',
            'TotalPrice'=> 'required',

        ]);
        $data = $request->all();
        $order = Order::find($id);
        $order->update($data);
        return redirect('order')->with('status','commande modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);
        return redirect('order');
    }
}
