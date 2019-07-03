<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'name' => ['required', 'string', 'max:80'],
            'name' => 'required|string|max:80',
        ];

        $this->formValidation($request->all(), $rules);

        // $category = Category::create(['name' => $request->name]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        // return redirect('categories');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        dd($category);
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
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
        $rules = [
            // 'name' => ['required', 'string', 'max:80'],
            'name' => 'required|string|max:80',
        ];

        $this->formValidation($request->all(), $rules);

        // $category = Category::where(['id' => $id])->update(['name' => $request->name]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        // return redirect('categories');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Category::destroy($id);

        // Category::whereIn(['id' => $id])->delete();

        // $category = Category::find($id);
        // $category->delete();

        if ($request->ajax()) {
            return response()->json(['status' => 200]);
        }

        return redirect()->route('categories.index');
    }
}
