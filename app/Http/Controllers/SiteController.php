<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class SiteController extends Controller
{

  public function home()
  {
    return view('pages.home');
  }

  public function about()
  {
    return view('pages.about');
  }

  public function blog()
  {
    $posts = Post::all();
    dd($posts);
    return view('pages.blog');
  }

}
