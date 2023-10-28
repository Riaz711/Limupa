<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
        use HasFactory;
     private static $category;

     public static function saveCategory($request)
     {
     self::$category = new Category();
     self::$category->name = $request->name;
     self::$category->save();
    }

     public static function updatedCategory($request,$id)
        {
        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
       }
        public static function deleteCategory($id)
        {
        self::$category = Category::find($id);
        self::$category->delete();
       }
       public function subCategory()
       {
        return $this->hasMany(SubCategory::class);
       }

    
}
