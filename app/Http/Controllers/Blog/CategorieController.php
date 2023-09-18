<?php

namespace App\Http\Controllers\Blog;

use App\Models\Admin\Blog\Posts;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Categorys;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    // -------------------------------------------------------------------

    public function index(Request $request, $title, $id)
    {
        $page = ($request->page ? $request->page : '');
        $category = Categorys::find($id);
        $posts = Posts::categoryId($id)->sortable(['publish_at' => 'desc'])->paginate(10);

        return view('blog.posts', compact('page', 'posts', 'category'));
    }

    // -------------------------------------------------------------------

    public function index_api(Request $request, $title, $id)
    {
        $page = ($request->page ? $request->page : '');
        $category = Categorys::find($id);
        $posts = Posts::categoryId($id)->sortable(['publish_at' => 'desc'])->paginate(10);

        return response()->json(
            [
                'posts' => $posts,
                'pagination' => [
                    'page' => $posts->currentPage(),
                    'page_size' => $posts->perPage(),
                    'total' => $posts->total(),
                    'total_pages' => $posts->lastPage(),
                ],
                'category' => $category
            ]
        );
    }
}
