<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Models\Category;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends BaseController
{
    public function index()
    {
        $categories = Category::all();
        return $this->sendResponse(CategoryResource::collection($categories), 'Categories fetched.');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',            
        ]);
		
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        
		$categories = Category::create($input);
        return $this->sendResponse(new CategoryResource($categories), 'Created.');
    }

   
    public function show($id)
    {
        $categories = Category::find($id);
        if (is_null($categories)) {
            return $this->sendError('Category does not exist.');
        }
        return $this->sendResponse(new CategoryResource($categories), 'Category fetched.');
    }
    

    public function update(Request $request, Category $categories)
    {
		/*
		$categories=Category::find($request->id));
        $categories->update($request->all());
		*/
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',            
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
		
		$categories2 = Category::find($request->id);
        
		$categories2->name = $input['name'];
        $categories2->save();
        
        return $this->sendResponse(new CategoryResource($categories2), 'Post updated.');
    }
   
    public function destroy($id)
    {
		$categories2 = Category::find($id);
        $categories2->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
