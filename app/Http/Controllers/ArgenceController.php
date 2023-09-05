<?php

namespace App\Http\Controllers;
use App\Models\argence;
use Illuminate\Http\Request;

class ArgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $argence=argence::all();
        return view('argence.index', compact('argence'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $argence=argence::all();
        return view('argence.create', compact('argence'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Name'=> 'required',
            'Places'=> 'required',


        ]);

        $data=$request->all();
        argence::create($data);
        return redirect('argence')->with('status','agence ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $argence= Argence::find($id);
        return view('argence.show',compact('argence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $argence = Argence::find($id);
        return view('argence.edit',compact('argence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'Name'=> 'required',
            'Places'=> 'required',


        ]);

        $data = $request->all();
        $argence = Argence::find($id);
        $argence->update($data);
        return redirect('argence')->with('status','agence modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Argence::destroy($id);
        return redirect('argence');
    }
}
