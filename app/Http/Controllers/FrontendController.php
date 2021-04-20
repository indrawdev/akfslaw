<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Partner;
use App\Post;
use App\Publication;

class FrontendController extends Controller
{

	public function index()
	{
		$profile    = Profile::find(1);
		$about      = Profile::find(2);
		$partners   = Partner::all();
		$services   = Post::where('category_id', '1')->get();

		return view('pages.front', [
			'profile' => $profile,
			'about' => $about,
			'partners' => $partners,
			'services' => $services
		]);
	}

	public function about()
	{
		$profile = Profile::find(2);
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
		$pubs = Publication::all();
		return view('pages.publication', ['pubs' => $pubs]);
	}

	public function contact()
	{
		$profile = Profile::find(3);
		return view('pages.contact', ['profile' => $profile]);
	}
}
