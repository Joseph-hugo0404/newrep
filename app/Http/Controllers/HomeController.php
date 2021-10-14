<?php

namespace App\Http\Controllers;

use App\Models\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Posts::orderByDesc('created_at')->get();
        $posts = DB::table('table_posts')
            ->orderByDesc('created_at')
            ->select('id',
                    'title',
                    'description',
                    DB::raw('(SELECT COUNT(id) FROM likes WHERE post_id=table_posts.id) AS Likes'))
            ->get();

        return view('home', ['posts' => $posts]);
    }public function makeLike(Request $request) {
            if ($request ->ajax()){
                $like = Likes::where('post_id', $request['post_id'])
                             ->where('user_id', $request['user_id'])
                             ->get();
                             
            if(count($like) > 0){
                Likes::where('post_id', $request['post_id'])
                        ->where('user_id', $request['user_id'])
                        ->delete();

                return json_encode(['result' => 'unliked']);
            }
            else{
                return json_encode(['result' => 'liked']);
            }
        }
    }
}
