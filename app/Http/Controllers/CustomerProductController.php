<?php

namespace App\Http\Controllers;
use App\Models\CustomerProduct;
use Illuminate\Http\Request;

class CustomerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order=order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order=order::all();
        return view('order.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Quantity'=> 'required',
            'UnitPrice'=> 'required',
            'TotalPrice'=> 'required',


        ]);

        $data=$request->all();
        order::create($data);
        return redirect('order');
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
        $order = CustomerProduct::find($id);
        return view('order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Quantity'=> 'required',
            'UnitPrice'=> 'required',
            'TotalPrice'=> 'required',

        ]);

        $data = $request->all();
        $order = CustomerProduct::find($id);
        $order->update($data);
        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CustomerProduct::destroy($id);
        return redirect('order');
    }
}
