<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blog = Blog::all();
        // $blog = DB::select('SELECT * FROM blogs');

        //create data
        // $blog = new Blog();
        // $blog->title = 'this is a new title 2';
        // $blog->body = 'this is a new body 2';
        // $blog->status = 0;
        // $blog->save();

        //Update data
        // $blog = Blog::find(2);
        // $blog->title = 'this is updated one';
        // $blog->body = 'this is the updated body';
        // $blog->status = 1;
        // $blog->save();

        // //get data
        // $blog = Blog::where(['status' => 0, 'id' => 1])->get();

        //delete data
        // $blog = Blog::FindOrFail(2);
        // $blog->delete();

        // $blog = Blog::with('category')->get();
        // // $category = $blog->category;

        // foreach ($blog as $b){
        //    echo $b->title . '->' . $b->category->name;
        //    echo "</br>";

        // }

        // dd($blog);
        // return $blog;

        // $category = Category::with('blogs')->find(1);

        // return $category;


    }
    // public function index()
    // {
    //     $blog = Blog::find(2);
    //     return $blog;
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'integer'],
            'title' => ['required', 'max:255', 'min:2'],
            'body' => ['required'],
            'status' => ['required', 'boolean']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
