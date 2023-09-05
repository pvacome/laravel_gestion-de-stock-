<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provider;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $provider= provider::all();
        return view('provider.index',compact('provider'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        return view('provider.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request,[
            'Name'=> 'required',
            'FirstName'=> 'required',
            'BP'=> 'required',
            'Email'=> 'required',
            'Phone'=> 'required',
            'County'=> 'required',
            'Tows'=> 'required',
        ]);
        $data=$request->all();
        provider::create($data);
        return redirect('provider')->with('status','fournisseur ajouter avec success');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provider = Provider::find($id);
        return view('provider.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provider= provider::all();
        return view('provider.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Name'=> 'required',
            'FirstName'=> 'required',
            'BP'=> 'required',
            'Email'=> 'required',
            'Phone'=> 'required',
            'County'=> 'required',
            'Tows'=> 'required',
        ]);
        $data = $request->all();
        $provider = Provider::find($id);
        $provider->update($data);
        return redirect('provider')->with('status','fournisseur modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Provider::destroy($id);
        return redirect('provider');
    }
}
