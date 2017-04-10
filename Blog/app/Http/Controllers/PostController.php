<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // desc 내림차순
        $recentPosts = \App\Post::orderBy('created_at', 'desc')->paginate(5);
        $modelView = [ 'postItems' => $recentPosts, ];

        return view('contents.post._base')->with($modelView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(['title', 'content',]);
        $imgPath = $request->file('img')->store('images','public'); //$request->img
        // 승인된 사용자 조회
        $user = $request->user();

        // 포스트 모델을 통한 저장
        $post = new \App\Post;
        $post->title = $inputs['title'];
        $post->content = $inputs['content'];
        $post->img_path = $imgPath;
        $post->user_id = $user->id;
        $post->save();

        // 연관 모델 삽입 방법을 이용한 저장
        // 이러면 키값을 안써줘도됨
        // 실패!! ㅜㅜ
//        $post = $user->posts()->create([
//            'title' => $inputs['title'],
//            'content'=> $inputs['content'],
//            'img_path' => $imgPath,
//        ]);

        return redirect( route('posts.show', $post));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user = Auth::user();
        $modelView = [
            'postItem' => $post,
            'user' => $user,
        ];

        return view('contents.post.detail')->with($modelView);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $modelView = [ 'postItem' => $post, ];

        return view('contents.post.edit')->with($modelView);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $inputs = $request->only(['title', 'content',]);

        $post->title = $inputs['title'];
        $post->content = $inputs['content'];
        $post->save();

        return redirect( route('posts.show', $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $currentUser = Auth::user();
        if($post->user_id == $currentUser->id) {
            $post->delete();
        }

        return redirect(route('posts.index'));
    }
}
