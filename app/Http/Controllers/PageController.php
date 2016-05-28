<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;
use Auth;

class PageController extends Controller
{
	public function showIndex() {
		$videos = Video::paginate(10);
		$videosLikes = array();
		if (Auth::check()) {
			$videosLikes = Auth::user()->videos()->get();
		}
		return view('pages.home', ['videos'=>$videos, 'videosLikes'=>$videosLikes]);
	}
	public function showMoreVideos(Request $request) {
		$videos = Video::paginate(10);
		if ($videos->count() > 0) {
			return view('partials.video', ['videos'=>$videos]);
		}
		return 0;
	}
	public function showVideoPage($id) {
		$video = Video::find($id);
		return view('pages.video', ['video'=>$video]);
	}
}
