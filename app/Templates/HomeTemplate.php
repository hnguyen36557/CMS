<?php

namespace App\Templates;

use Illuminate\View\View;
use App\Post;
use Carbon\Carbon;
class HomeTemplate extends AbstractTemplate
{
    protected $view = 'home';

    protected  $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function prepare(View $view, array $parameters)
    {
        $posts = $this->posts->with('author')
                             ->where('published_at', '<' ,Carbon::now())
                             ->orderBy('published_at', 'desc')
                             ->take(3)
                             ->get();
        $view->with('posts', $posts);
    }
}