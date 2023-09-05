<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use App\Notifications\ProductNotification;

use App\Models\sale;
use App\Models\inventory;
use App\Models\provider;
use App\Models\argence;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product= Product::count();
        $products= product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $argence = argence::all();
        $provider = provider::all();
        $category=category::all();

        $sale=sale::all();
      return view('product.create',compact('argence','provider','category','sale'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'Name' =>'required',

            // 'Labels' =>'required',
            // 'Name'=> 'required',
            // 'Labels'=> 'required',
            // 'Type'=> 'required',
            // 'Designation'=> 'required',
            // 'Quantity'=> 'required',
            //  'Number'=> 'required',
            // 'UnitPrice'=> 'required',
            // 'TotalPrice'=> 'required',
            // 'ExpirationDate'=> 'required',
            // 'DateOfManufacture'=> 'required',
        ]);
        $product = new Product();
        $product->Name = $request->Name;
        $product->Labels = $request->Labels;
        $product->Name = $request->Name;
        $product->Labels = $request->Labels;
        $product->Type = $request->Type;
        $product->Designation = $request->Designation;
        $product->Quantity = $request->Quantity;
        $product->Number = $request->Number;
        $product->UnitPrice = $request->UnitPrice;
        $product->TotalPrice = $request->TotalPrice;
        $product->ExpirationDate = $request->ExpirationDate;
        $product->DateOfManufacture = $request->DateOfManufacture;
        $product->provider = $request->provider;
        $product->category = $request->category;
        $product->argence = $request->argence;
        $product->save();
        if($product >""){

            $product->notify(new ProductNotification );
        }else{
            $product->notify(new ProductNotification );
        }


        // $data=$request->all();
        // product::create($data);
        // if( $product = 1 ){

        //     $product->notify(new ProductNotification);

        // }
        // else{
        //     $product->notify(new ProductNotification);
        // }
        return redirect('product')->with('status','produit ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $argence=argence::all();
        $provider = provider::all();
        $category=category::all();
        // $bill=bill::all();
        $sale=sale::all();
        $product = product::find($id);
        return view('product.edit',compact('provider','category','sale','argence','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Name' => $request->Name,
            // 'Name' => 'required|string|max:191|min:1',
            'Labels' => ''.$request->Labels,
            'Name'=> 'required',
            'Labels'=> 'required',
            'Type'=> 'required',
            'Designation'=> 'required',
            'Quantity'=> 'required',
            'Number'=> 'required',
            'UnitPrice'=> 'required',
            'TotalPrice'=> 'required',
            'ExpirationDate'=> 'required',
            'DateOfManufacture'=> 'required',
        ]);

        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return redirect('product')->with('status','produit modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('product');
    }
}
