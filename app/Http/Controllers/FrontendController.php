<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Partner;
use App\Post;
use App\Profile;

class FrontendController extends Controller
{

    public function index()
    {
        $profile = Profile::findOrFail(1);
        $about = Profile::findOrFail(2);
        $partners = Partner::all();
        $posts = Post::with(['category'])->get();
        
        return view('pages.front', [
            'profile' => $profile, 
            'about' => $about,
            'partners' => $partners, 
            'posts' => $posts
        ]);
    }

    public function about()
    {
        $profile = Profile::findOrFail(2);
        return view('pages.about', ['profile' => $profile]);
    }

    public function partner($slug)
    {
        $partner = Partner::where('slug', '=', $slug)->firstOrFail();
        return view('pages.partner', ['partner' => $partner]);
    }

    public function service($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('pages.service', ['post' => $post]);
    }

    public function publication()
    {
        return view('pages.publication');
    }

    public function contact()
    {
        $profile = Profile::findOrFail(3);
        return view('pages.contact', ['profile' => $profile]);
    }
}
