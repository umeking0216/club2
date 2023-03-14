<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'asc')->paginate(3);
        return view('posts', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	  $images = $request->file('images');
	  $path = null;
        // dd($image);
        // 画像がアップロードされていれば、storageに保存
	  if($request->hasFile('images')){
            $path = \Storage::put('/public', $images);
            $path = explode('/', $path);
        } 
	  
	  
	  
	  $posts = new Post;
	  $posts->title = $request->title;
	  $posts->body = $request->body;
	  $posts->images = $path ? $path[1] : null;
	  $posts->save(); 
	  return redirect('/');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        return view('postsedit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::find($request->id);
        $images = $request->file('images');
        $path = $post->images;  // 変数を宣言し、初期化
    //   $new_path = [ ];
       
        if (isset($images)) {
            // 現在の画像ファイルの削除
            \Storage::disk('public')->delete($path);
            // 選択された画像ファイルを保存してパスをセット
            $path = $images->store('posts', 'public');
        }
    //   dd($path);
    // if ($images) {
    //     $path = \Storage::put('/public', $images);
    //     $new_path = explode('/', $path);
    
    //  }
        //  dd($path);
        //バリデーション
        //  $validator = Validator::make($request->all(), [
        //      'id' => 'required',
        //      'item_name' => 'required|min:3|max:255',
        //      'item_number' => 'required|min:1|max:3',
        //      'item_amount' => 'required|max:6',
        //      'published' => 'required',
        // ]);
        //バリデーション:エラー
        //  if ($validator->fails()) {
        //      return redirect('/postsedit/'.$request->id)
        //          ->withInput()
        //          ->withErrors($validator);
        // }
        
        //データ更新
        // $posts = Post::find($request->id);
        
        // $post = Post::find($request->id);
if (!$post) {
    abort(404); // もし$postがnullなら、404エラーを返す
}
        // dd($path);
        $post->title = $request->title;
	    $post->body = $request->body;
	    $post->images = $path;
        $post->save();
        return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();       //追加
       return redirect('/');  //追加
    }
    
    // only()の引数内のメソッドはログイン時のみ有効
  public function __construct()
  {
    $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
  }


 /**
  * 引数のIDに紐づくリプライにLIKEする
  *
  * @param $id リプライID
  * @return \Illuminate\Http\RedirectResponse
  */
  public function like($id)
  {
    Like::create([
      'post_id' => $id,
      'user_id' => Auth::id(),
    ]);

    session()->flash('success', 'You Liked the Reply.');

    return redirect()->back();
  }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
  public function unlike($id)
  {
    $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return redirect()->back();
  }
    
    
}
