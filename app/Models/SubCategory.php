<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategoy;

     public static function newSubCategory($request){
        self::$subCategoy = new SubCategory();
        self::$subCategoy->name             =  $request->name;
        self::$subCategoy->category_id      = $request->category_id;
        self::$subCategoy->save();

  
     
    }

    public static function updatedSubCategory($request,$id){
        self::$subCategoy = SubCategory::find($id);
        self::$subCategoy->name         = $request->name;
        self::$subCategoy->category_id  = $request->category_id;
        self::$subCategoy->status       = $request->status;
        self::$subCategoy->save();
       }
       
    public static function deleteSubCategory($id){
        self::$subCategoy = SubCategory::find($id);
        self::$subCategoy->delete();
       }
       public function category(){
         return $this->BelongsTo(Category::class);
       }
     
}
