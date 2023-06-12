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
        // if (isset($searchFilters['search']) ? $searchFilters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $searchFilters['search'] . '%')
        //             ->orWhere('body', 'like', '%' . $searchFilters['search'] . '%');
        // }

        $query->when($searchFilters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($searchFilters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        $query->when($searchFilters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use($author){
                $query->where('username', $author);
            });
        });
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