<?php

namespace App\Http\Controllers;
use App\Models\customer;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=customer::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=customer::all();
        return view('customer.create',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required',
            'FirstName'=> 'required',
            'Email'=> 'required',
            'Number'=> 'required',


        ]);

        $data=$request->all();
        customer::create($data);
        return redirect('customer')->with('status','client ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);

        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=> 'required',
            'FirstName'=> 'required',
            'Email'=> 'required',
            'Number'=> 'required',

        ]);

        $data = $request->all();
        $customer = Customer::find($id);
        $customer->update($data);
        return redirect('customer')->with('status','client modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::destroy($id);
        return redirect('customer');
    }
}
