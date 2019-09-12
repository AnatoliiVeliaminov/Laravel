<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * @param CategoryCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryCreateRequest $request)
    {
        $category = new \App\Category();
        $category->title = $request->title;
        $category->description = $request->description;

        if ($category->save()) {
            return redirect()->route('categories.index');
        }

        return redirect()->back();
    }

    /**
     * @param Category $category
     */
    public function edit(Category $category)
    {
        dd($category);
    }

    /**
     * @param Category $category
     */
    public function delete(Category $category)
    {
        dd($category);
    }
}
