<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category() {
        $category = Category::all();
        return view('admin.category.category',compact('category'));
    }


    public function storecategory(Request $request) {
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

    //$data=array();
    //$data['category_name']=$request->category_name;
    //DB::table('categories')->insert($data);
    
    $category = new Category();
    $category->category_name = $request->category_name;
    $category->save();
    
    $notification=array(
        'messege'=>'Category added successfully!',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);

    }


    public function deletecategory($id) {
        DB::table('categories')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Category deleted successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function editcategory($id) {
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category', compact('category'));
    }


    public function updatecategory(Request $request, $id) {
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

    $data=array();
    $data['category_name']=$request->category_name;
    $update=DB::table('categories')->where('id',$id)->update($data);

    if($update) {
        $notification=array(
            'messege'=>'Category update successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->route('categories')->with($notification);
    } else {
        $notification=array(
            'messege'=>'Nothing to update.',
            'alert-type'=>'error'
             );
           return Redirect()->route('categories')->with($notification);
    }

    }

}
