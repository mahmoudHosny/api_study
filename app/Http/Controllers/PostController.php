<?php

namespace App\Http\Controllers;

use App\Http\Resources\TopicCollectionResource;
use App\Http\Resources\TopicResource;
use Illuminate\Http\Request;
use App\Topic;
class PostController extends Controller
{

    public function index(){

        $topics = Topic::all()->load('comments');
        return  TopicResource::collection($topics);
        return new TopicCollectionResource($topics);
    }

    public function create(Request $request){
        $data = $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $topic = Topic::create($data);
        return new TopicResource($topic);

    }
}
