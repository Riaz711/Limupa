<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand.manage',[
            'brands' => Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.index');

      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,[
            'name' => 'required|unique:brands|regex:/(^([a-zA-z- & . ,()]+)(\d+)?$)/u',
            'image' => 'required'
            ]
        );
       
      Brand::newBrand($request);
        return back()->with('message','Brand Created Successfully');
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
        
         return view('admin.brand.edit',[
            'brand' => Brand::find($id)
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // echo "ok";
        $this->validate($request,[
            'name' => 'required|regex:/(^([a-zA-z- & . ,()]+)(\d+)?$)/u',
            'image' => 'required'
            ]
        );
        Brand::updateBrand($request,$id);
        return redirect('/brand')->with('message','Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::deleteBrand($id);
        return back()->with('message','Deleted Successfully');
    }
}
