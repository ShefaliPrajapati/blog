<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $categories = Categories::latest()->get();
        return view('category.index',compact('categories'));
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories',
        ]);

        Categories::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category Successfully Saved :)');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Categories::find($id);
        return view('category.edit',compact('category'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $category = Categories::find($id);

        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category Successfully Updated :)');
    }

    /**
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category Successfully Deleted ');
    }
}
