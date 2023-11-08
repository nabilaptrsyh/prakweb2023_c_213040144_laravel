<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // public function scopeFilter($query, array $filters) {
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //                     ->orWhere('body', 'like', '%' . $search . '%');
    //     });

    //     $query->when($filters['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });

    //     $query->when($filters['author'] ?? false, fn($query, $author) =>
    //         $query->whereHas('author', fn($query) =>
    //             $query->where('username', $author)  
    //         )
    //     );
    // }

    public function scopeFilter($query, array $filters)
    {
        $query->when(isset($filters['search']), function ($query) use ($filters) {
            $search = '%' . $filters['search'] . '%';
            return $query->where('title', 'like', $search)
                ->orWhere('body', 'like', $search);
        });

        $query->when(isset($filters['category']), function ($query) use ($filters) {
            return $query->whereHas('category', function ($query) use ($filters) {
                $query->where('slug', $filters['category']);
            });
        });

        $query->when(isset($filters['author']), function ($query) use ($filters) {
            return $query->whereHas('author', function ($query) use ($filters) {
                $query->where('username', $filters['author']);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}