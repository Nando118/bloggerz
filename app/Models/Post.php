<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $with = [
        'category',
        'author',
    ];

    public function scopeSearchFilters($query, array $searchFilters)
    {
        if (isset($searchFilters['search']) ? $searchFilters['search'] : false) {
            return $query->where('title', 'like', '%' . $searchFilters['search'] . '%')
                    ->orWhere('body', 'like', '%' . $searchFilters['search'] . '%');
        }
    }

    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}