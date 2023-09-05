<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\order;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   $product= Product::count();

      $casquette= Product::where('category','1')->count();
      $product= Product::sum('Quantity');
      $order= Order::sum('customer');

       $t_shirt= Product::where('category','1')->count();
        $polo= Product::where('category','1')->count();

    //   $polo = DB::table('Product')->sum('Quantity');

      $banderole= Product::where('category','2')->count();
        return view('dashboard',compact('product','casquette','t_shirt','polo','banderole','order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
