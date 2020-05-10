<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Posts::where('user_id', Auth::id())->latest()->published()->paginate(10);
        return view('home', compact('posts'));
    }

    public function filterByDate(Request $request)
    {
        $date = date('Y-m-d', strtotime($request->get('date')));
        $posts = Posts::whereDate('created_at',$date)->where('user_id', Auth::id())->published()->get();
        if ($posts) {
            return Response::view('date', compact('posts'))->header('Content-Type', 'html');
        } else {
            return Response::json(array('data' => 'Data not found!'));
        }
    }

    public function details($slug)
    {
        $post = Posts::where('slug',$slug)->where('user_id', Auth::id())->published()->first();

        return view('post',compact('post'));
    }
}
