<?php

namespace App\Models\Admin\Kols;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kols extends Model
{
    use SoftDeletes, Sortable;

    protected $table = 'kols';

    protected $fillable = [
        'channel_name',
        'channel_url',
        'followers_number',
        'description',
    ];

    protected $sortable = [
        'id',
        'channel_name',
        'channel_url',
        'followers_number',
        'description',
        'created_at',
    ];
}
