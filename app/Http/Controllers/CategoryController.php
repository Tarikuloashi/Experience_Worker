<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
      $categories=Category::all();
            return view ('admin.category.allCategory',['categories'=>$categories]);

    }

    public function create()
    {
        return view('admin.category.createCategory');
    }

    public function store(Request $request)
    {
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
    	return redirect ('category')->with('message','category create successful');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
