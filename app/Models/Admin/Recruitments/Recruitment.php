<?php

namespace App\Models\Admin\Recruitments;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recruitment extends Model
{
    use SoftDeletes, Sortable;

    protected $table = 'recruitment';

    protected $fillable = [
        'position',
        'expried_date',
        'location',
        'description',
    ];

    protected $sortable = [
        'id',
        'position',
        'expried_date',
        'location',
        'description',
        'created_at',
    ];
}
