<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;
use App\video_tags;
use Auth;
use Youtube;

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


}
