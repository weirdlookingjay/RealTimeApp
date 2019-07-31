<?php

namespace App\Http\Controllers;

use App\Model\Likes;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikesController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            'user_id' => '1'
        ]);
    }

    public function unLikeIt(Reply $reply)
    {
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
