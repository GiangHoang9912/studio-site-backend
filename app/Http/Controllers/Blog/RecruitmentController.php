<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Admin\Recruitments\Recruitment;
use Symfony\Component\HttpFoundation\Request;

class RecruitmentController extends Controller
{
    public function index_api(Request $request)
    {
        $page = ($request->page ? $request->page : '');
        $recruitments = Recruitment::sortable(['expried_date' => 'desc'])->paginate(10);

        return response()->json(
            [
                'recruitments' => $recruitments,
                'pagination' => [
                    'page' => $recruitments->currentPage(),
                    'page_size' => $recruitments->perPage(),
                    'total' => $recruitments->total(),
                    'total_pages' => $recruitments->lastPage(),
                ]
            ]
        );
    }

}
