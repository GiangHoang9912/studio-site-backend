<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Admin\Kols\Kols;
use Symfony\Component\HttpFoundation\Request;

class KolsController extends Controller
{
    public function index_api(Request $request)
    {
        $page = ($request->page ? $request->page : '');
        $kols = Kols::sortable(['followers_number' => 'desc'])->paginate(10);

        return response()->json(
            [
                'kols' => $kols,
                'pagination' => [
                    'page' => $kols->currentPage(),
                    'page_size' => $kols->perPage(),
                    'total' => $kols->total(),
                    'total_pages' => $kols->lastPage(),
                ]
            ]
        );
    }

}
