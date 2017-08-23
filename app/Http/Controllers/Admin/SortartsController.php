<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sortart;

class SortartsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sorts = Sortart::all(); 
        return view('admin.sortarts.index',compact('sorts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sortarts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2'
        ]);
        $data = [
            'name' => $request->name,
        ];
        Sortart::create($data);
        session()->flash('success','添加成功');
        return redirect()->route('admin.sortarts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sort = Sortart::findOrFail($id);
        return view('admin.sortarts.edit',compact('sort'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|min:2'
        ]);
        $sort = Sortart::findOrFail($id); 
        $sort->update([
            'name' => $request->name,
        ]);
        session()->flash('success','修改成功');
        return redirect()->route('admin.sortarts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
}
