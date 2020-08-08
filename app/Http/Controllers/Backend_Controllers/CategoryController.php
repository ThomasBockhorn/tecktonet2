<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Project Categories';

        $categories = Category::orderBy('id', 'desc')->paginate(6);

        return view('backend_pages/Categories/Backend_Categories', compact('title'))
            ->with('Categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create New Category';
        return view('backend_pages/Categories/Backend_Categories_form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'project_id' => 'nullable'
        ]);

        $category = new Category;
        $category->category = $request->category;

        if ($category->save()) {

            return redirect()->route('categories.index');
        } else {
            return redirect()->route('category.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit a Category';

        $category = Category::findOrFail($id);

        return view('backend_pages/Categories/Backend_Categories_edit', compact('title'))
            ->with('Category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required',
            'project_id' => 'nullable'
        ]);

        $category = Category::findOrFail($id);
        $category->category = $request->category;

        if ($category->update()) {
            return redirect()->route('categories.index');
        } else {
            return redirect()->route('categories.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}