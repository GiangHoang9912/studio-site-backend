<?php

namespace App\Http\Controllers\Blog;

use App\Models\Admin\Blog\Posts;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    // -------------------------------------------------------------------

    public function index(Request $request)
    {
        $page = ($request->page ? $request->page : 1);
        $term = $request->input('term');

        $posts = Posts::search($term, null, true)->paginate(10);

        return view('blog.posts', compact('posts', 'term', 'page'));
    }

    // -------------------------------------------------------------------
    public function index_api(Request $request)
    {
        $page = ($request->page ? $request->page : 1);
        $term = $request->input('term');

        $posts = Posts::search($term, null, true)->paginate(10);

        return response()->json(
            [
                'posts' => $posts,
                'term' => $term,
                'pagination' => [
                    'page' => $posts->currentPage(),
                    'page_size' => $posts->perPage(),
                    'total' => $posts->total(),
                    'total_pages' => $posts->lastPage(),
                ],
            ]
        );
    }
}
