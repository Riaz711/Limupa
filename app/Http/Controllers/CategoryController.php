<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
    return view('admin.category.index');
   }

   public function creat(Request $request){
      $this->validate($request,[
         'name' => 'required|unique:categories|regex:/(^([a-zA-z- & . ,()]+)(\d+)?$)/u'
     ]);
     
        Category::saveCategory($request);
        return back()->with('message','Category creat succesfully');
   }
   public function manage(){
      return view('admin.category.manage',[
        'categories'=> Category::all()
      ]);
      
   }
   public function edit($id){
    
      return view('admin.category.edit',[
      'category'=> Category::find($id)
      ]);

   }
   public function update(Request $request,$id){
      $this->validate($request,[
         'name' => 'required|regex:/(^([a-zA-z- & . ,()]+)(\d+)?$)/u'
     ] );

       Category::updatedCategory( $request,$id);
       return redirect('/category-manage')->with('message','Category update succesfully');
   }
   public function delete($id){
       Category::deleteCategory($id);
       return redirect('/category-manage')->with('message','Category delete succesfully');
   }
}
