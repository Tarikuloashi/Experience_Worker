<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{

    public function manage(){
      $categories=Category::all();
            return view ('admin.category.manageCategory',['categories'=>$categories]);

    }

    public function create(){
        return view('admin.category.createCategory');
    }

    public function store(Request $request){
      $this->validate($request,[
            'categoryName'=>'required',
            'categoryDescription'=>'required',
            ]);

    		//return $request->all();

    	$category=new Category();
    	$category->categoryName=$request->categoryName;
    	$category->categoryDescription=$request->categoryDescription;
    	$category->publicationStatus=$request->publicationStatus;
    	$category->save();
    	return redirect ('category/manage')->with('message','category create successful');
    }

    public function edit($id){
        $categoryByid=Category::where('id',$id)->first();
        return view ('admin.category.editCategory',['categoryByid'=>$categoryByid]);
    }

    public function update(Request $request){
       // dd($request->all());
      $categoryup=Category::find($request->id);
      $categoryup->categoryName=$request->categoryName;
    	$categoryup->categoryDescription=$request->categoryDescription;
    	$categoryup->publicationStatus=$request->publicationStatus;
      $categoryup->save();
      return redirect('/category/manage')->with('message','Category Info update Successfully');

    }

    public function destroy($id){
      $category=Category::find($id);
      $category->delete();
      return redirect('/category/manage')->with('message','Category Info Delete Successfully');
    }
}
