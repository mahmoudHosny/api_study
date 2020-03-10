<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($id,Request $request){
        $topic = Topic::find($id);
        $comment = $topic->comments()->create(['body'=>$request->input('body')]);
        return $comment;
    }
}
