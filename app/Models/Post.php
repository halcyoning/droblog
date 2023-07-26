<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    // list yang bisa di isi menggunakan eloquent
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body'
    // ];
 
    // kebalikan $fillable, list ini tidak bisa di isi manual
    protected $guarded = ['id'];

    // digunakan untuk mengatasi N + 1 problem (lazy query)
    protected $with = ['author', 'category'];

    // search engine
    public function scopeFilter($query, array $filters)
    {
        // request('search') digunakan untuk mengambil data search yang ada di view posts pencarian

        // if(isset($filters['search']) ? $filters['search'] : false)
        // {
        //     return $query->where('title', 'like', '%'.$filters['search'].'%')
        //                 ->orWhere('body', 'like', '%'.$filters['search'].'%');
        // }

        // sama dengan diatas
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'.$search.'%')
                        ->orWhere('body', 'like', '%'.$search.'%');
        });

        // untuk mencari kata dan berdasarkan kategori (wpu eps 13 query filter)
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        // untuk mencari kata dan berdasarkan author (wpu eps 13 query filter)
        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }

    // untuk menghubungkan table post ke category (one to one)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
