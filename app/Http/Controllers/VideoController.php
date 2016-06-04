<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;
use App\video_tags;
use Auth;
use Youtube;
use App\User;

class VideoController extends Controller
{
    public function getVimeo() {
    	return view('pages.secret');
    }
    public function insertVideoVimeo(Request $request) {
    	$videos = $request->input('videos');
    	foreach ($videos as $video) {
    		if ($video['embed']['html'] != "" && isset($video['tags'])) {
    			$item = new Video();
                var_dump($video);
    			$item->name = $video['name'];
    			$item->description = $video['description'];
    			$item->duration = $video['duration'];
    			$item->uri = $video['uri'];
    			$item->embed = $video['embed']['html'];
    			$item->width = $video['width'];
    			$item->height = $video['height'];
                $item->tags = '';
                foreach ($video['tags'] as $tag) {
                    $item->tags .= $tag['name'];
                }
    			$item->link = $video['link'];
    			$item->save();
    		}
    	}
    }
    public function VideoYoutube(Request $request, $tag) {
        $videoList = Youtube::searchVideos($tag);
        foreach ($videoList as $item) {
            $item = get_object_vars($item);
             $item = get_object_vars($item['id']);
            $video = Youtube::getVideoInfo($item['videoId']);
            $video = get_object_vars($video);
            $desc = get_object_vars($video["snippet"]);
            $player = get_object_vars($video["player"]);
            var_dump($video);
            $vid = new Video();
            $vid->name = $desc['title'];
            $vid->uri = $video['id'];
            $vid->description = $desc['description'];
            $vid->embed = $player["embedHtml"];
            $vid->tags = $tag;
            foreach ($desc["tags"] as $tag) {
                $vid->tags .= $tag;
            }
            $vid->link = "https://www.youtube.com/watch?v=".$video['id'];
            $vid->save();
        }
        return 1;
    }
    public function likeVideo(Request $request) {
    	if (Auth::check()) {
            $this->validate($request, ['id'=>'exists:videos,id']);
    		$count = Auth::user()->videos()->find($request->input('id'));
    		if (!$count) {
                $video = Video::find($request->input('id'));
    			Auth::user()->videos()->attach($video);
    			return 1;
    		}
            else return 0;
    	}
    	else return 0;
    }
    public function getJsonVideo(Request $request, $key) {
        $videosLikes = array();
        $user = User::where('apiKey', $key)->first();
        if (isset($user)) {
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
        }
        return response()->json($videosLikes);
    }

}
