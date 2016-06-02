<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    protected $posts;
    public function __construct(Post $posts)
    {
        $this->posts = $posts;

        parent::__construct();
    }

    public function index() {
        $posts = $this->posts->with('author')->orderBy('published_at','desc')->paginate(10);
        return view('backend.blog.index', compact('posts'));
    }

    public function create(Post $post) {
        return view('backend.blog.form', compact('post'));
    }

    public function store(Requests\StorePostRequest $request) {
        $this->posts->create(['author_id' => auth()->user()->id] + $request->only('title', 'slug' ,'published_at', 'body', 'excerpt'));
        return redirect(route('backend.blog.index'))->with('status', 'Create Post Success');
    }

    public function edit($id) {
        $post = $this->posts->findOrFail($id);
        return view('backend.blog.form', compact('post'));
    }

    public function update(Requests\UpdatePostRequest $request, $id) {
        $post = $this->posts->findOrFail($id);
        $post->fill($request->only('title', 'slug', 'published_at', 'body', 'excerpt'))->save();
        return redirect(route('backend.blog.edit', $post->id))->with('status', 'Update Success');
    }

    public function confirm($id) {
        $post = $this->posts->findOrFail($id);
        return view('backend.blog.confirm', compact('post'));
    }

    public function destroy($id) {
        $post = $this->posts->findOrFail($id);
        $post->delete();
        return redirect(route('backend.blog.index'))->with('status', 'Delete Success');
    }
}
