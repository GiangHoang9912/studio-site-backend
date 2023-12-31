<?php

namespace App\Http\Controllers\Blog;

use App\Models\Admin\Blog\Posts;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Categorys;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    // -------------------------------------------------------------------

    public function index(Request $request)
    {
        $page = ($request->page ? $request->page : '');
        $posts = Posts::sortable(['publish_at' => 'desc'])->paginate(10);

        return view('blog.posts', compact('posts', 'page'));
    }

    public function index_api(Request $request)
    {
        $page = ($request->page ? $request->page : '');
        $posts = Posts::sortable(['publish_at' => 'desc'])->paginate(10);

        return response()->json(
            [
                'posts' => $posts,
                'pagination' => [
                    'page' => $posts->currentPage(),
                    'page_size' => $posts->perPage(),
                    'total' => $posts->total(),
                    'total_pages' => $posts->lastPage(),
                ]
            ]
        );
    }

    // -------------------------------------------------------------------

    public function categorys()
    {
        $categorys = Categorys::where('status', 1)->orderBy('order', 'ASC')->get();

        return view('blog._inc.categorys', compact('categorys'));
    }

    // -------------------------------------------------------------------
}
