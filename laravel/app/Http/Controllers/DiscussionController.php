<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redis;
class DiscussionController extends Controller
{
    public function index() {
        $arr = DB::table('goods')->get();
        return view('discussion.discussionList',['arr'=>$arr]);
    }
}
