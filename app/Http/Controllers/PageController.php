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
			$user = Auth::user();
			if ($user->preferences()->java == 1) {
				$vids = Video::where('tags', 'like', '%java%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->net == 1) {
				$vids = Video::where('tags', 'like', '%net%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->android == 1) {
				$vids = Video::where('tags', 'like', '%android%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->ios == 1) {
				$vids = Video::where('tags', 'like', '%ios%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->html == 1) {
				$vids = Video::where('tags', 'like', '%html%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->css == 1) {
				$vids = Video::where('tags', 'like', '%css%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->javascript == 1) {
				$vids = Video::where('tags', 'like', '%javascript%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->web == 1) {
				$vids = Video::where('tags', 'like', '%apis%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->architecture == 1) {
				$vids = Video::where('tags', 'like', '%architecture%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->design == 1) {
				$vids = Video::where('tags', 'like', '%design%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->methodology == 1) {
				$vids = Video::where('tags', 'like', '%methodology%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->frameworks == 1) {
				$vids = Video::where('tags', 'like', '%frameworks%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->tools == 1) {
				$vids = Video::where('tags', 'like', '%tools%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->machine_learning == 1) {
				$vids = Video::where('tags', 'like', '%machine_learning%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->data_bases == 1) {
				$vids = Video::where('tags', 'like', '%data_bases%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->performance == 1) {
				$vids = Video::where('tags', 'like', '%performance%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->productivity == 1) {
				$vids = Video::where('tags', 'like', '%productivity%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->cloud == 1) {
				$vids = Video::where('tags', 'like', '%cloud%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->security == 1) {
				$vids = Video::where('tags', 'like', '%security%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->automation == 1) {
				$vids = Video::where('tags', 'like', '%automation%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			if ($user->preferences()->testing == 1) {
				$vids = Video::where('tags', 'like', '%testing%')->get();
				foreach ($vids as $vid) {
					array_push($videosLikes, $vid);
				}
			}
			$videos = $videosLikes;
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
