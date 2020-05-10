<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Categories::all();

        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'categories' => 'required',
            'body' => 'required',
        ]);

        $image = $request->file('image');
        if(isset($image)) {
            $imageName  =  time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path() . '/images';
            $request->file('image')->move($destinationPath, $imageName);
        } else {
            $imageName = "default.png";
        }

        $post = new Posts();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->image = $imageName;
        $post->body = $request->body;
        if(isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        $post->save();

        $post->categories()->attach($request->categories);

        return redirect()->route('home')->with('success', 'Post Successfully Saved :)');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $post
     * @return Response
     */
    public function edit(Posts $post)
    {
        $categories = Categories::all();

        return view('post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Posts $post
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, Posts $post)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'categories' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        if(isset($image)) {
            $imageName  =  time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path() . '/images';
            $request->file('image')->move($destinationPath, $imageName);
        } else {
            $imageName = "default.png";
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->image = $imageName;
        $post->body = $request->body;
        if(isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        $post->save();

        $post->categories()->sync($request->categories);

        return redirect()->route('home')->with('success', 'Post Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Posts $post
     * @return Response
     * @throws \Exception
     */
    public function destroy(Posts $post)
    {
        if (file_exists(public_path('images/'.$post->image))) {
            unlink(public_path('images/'.$post->image));
        }
        $post->categories()->detach();
        $post->delete();

        return redirect()->back()->with('success', 'Post Successfully Deleted');
    }

    public function show($slug)
    {
        $post = Posts::where('slug',$slug)->published()->first();

        return view('post',compact('post'));
    }
}
