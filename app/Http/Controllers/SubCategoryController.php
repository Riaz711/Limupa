<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.subCategory.index',[
            'categories' => Category::all()
        ]);
       }
    
       public function creat(Request $request){
         $this->validate($request,[
          'name' => 'required|unique:sub_categories|regex:/(^([a-zA-z- & . ,()]+)(\d+)?$)/u',
          'category_id' => 'required'
         ],[
          'category_id' => 'Please select the category name'
         ] );
         
       SubCategory::newSubCategory($request);
            return redirect('/subCategory-add')->with('message','Sub Category creat succesfully');
       }
       public function manage(){
          return view('admin.subCategory.manage',[
             'subCategories'=> SubCategory::all()
          ]);
          
       }
       public function edit($id){
        
          return view('admin.subCategory.edit',[
            'categories'=> Category::all(),
            'subCategory'=> SubCategory::find($id)
          ]);
    
       }
       public function update(Request $request,$id){
        $this->validate($request,[
          'name' => 'required',
        ] );
           SubCategory::updatedSubCategory( $request,$id);
           return redirect('/subCategory-manage')->with('message',' Sub Category update succesfully');
       }
       public function delete($id){
           SubCategory::deleteSubCategory($id);
           return redirect('/subCategory-manage')->with('message','Sub Category delete succesfully');
       }
}
