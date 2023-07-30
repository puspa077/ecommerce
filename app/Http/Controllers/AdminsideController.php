<?php

namespace App\Http\Controllers;

use App\Models\Adminside;
use Illuminate\Http\Request;

class AdminsideController extends Controller
{
    public function first(){
        $type = Adminside::all();
        return view('admin.category',compact('type'));
    }
    public function store(Request $request){
        $type = new Adminside();
        $type->name = $request->name;

        $type->save();
        return back();
    }
    public function update(Request $request, $id){
        $type = Adminside::Find($id);
        $type->name = $request->name;
    
        $type->update();
        return redirect('/category')->with('success', 'Successfully Updated');
    }
    public function edit1($id){
        $type = Adminside::Find($id);
        return view('admin.edithana', compact('type'));
    }
    public function delete($id){
        $type = Adminside::Find($id);
        $type->delete();
        return back();
    }
}
