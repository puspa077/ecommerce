<?php

namespace App\Http\Controllers;

use App\Models\Adminside;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function second()
    {
        $category = Adminside::all();
        return view('admin.product', compact('category'));
    }
    public function third()
    {
        $product = Products::all();
        return view('admin.show', compact('product'));
    }
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move('image', $filename);
        }
        $product->image = 'image/' . $filename;
        $product->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $product = Products::Find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move('image', $filename);

            $product->image = 'image/' . $filename;
        }
        $product->update();
        return redirect('/show')->with('success', 'Successfully Updated');
    }
    public function edit2($id)
    {
        $product = Products::Find($id);
        return view('admin.editdul', compact('product'));
    }
    public function drop($id)
    {
        $product = Products::Find($id);
        $product->delete();
        return back();
    }
}