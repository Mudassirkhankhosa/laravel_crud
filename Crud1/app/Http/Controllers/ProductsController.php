<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index',['products'=>product::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('insert')->with('message','product added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product=new Product;

         if($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/',$imagename);
        $product->name=$request['pname'];
        $product->description=$request['description'];
        $product->image=$imagename;
        $product->save();
        return redirect()->route('index')->with('message', 'Successfully Inserted!');

    }
}

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $record = Product::find($id);

        return view('update',compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
             if($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/',$imagename);
        $product->image=$imagename;

    }
        $product->name=$request['pname'];
        $product->description=$request['description'];
        $product->update();
        return redirect()->route('index')->with('message', 'Successfully Updated!');

    



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $record = Product::find($id);

    if ($record) {
        // Delete the record
        $record->delete();
        return redirect()->route('index')->with('message', 'Successfully Deleted!');


    } else {
        return "Record with ID $id not found.";
    }

    }
}
