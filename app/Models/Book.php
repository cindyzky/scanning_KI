<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
       $query->when($filters['search'] ?? false, function ($query, $search){
        return $query->where('title', 'like', '%'. $search .'%')
        ->orWhere('penulis', 'like', '%'. $search .'%')
        ->orWhere('sinopsis', 'like', '%'. $search .'%');
      });

      $query->when($filters['category'] ?? false, function ($query, $category){
        return $query->whereHas('category', function($query) use ($category){
          $query->where('slug', $category);
        });
      });
    }


    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function borrows()
    {
      return $this->hasMany(Borrow::class);
    }

<<<<<<< HEAD
    public function waitingList()
    {
      return $this->hasMany(WaitingList::class);
    }
=======
    public function return()
    {
      return $this->hasMany(History::class);
  }
  public function waitingList()
  {
    return $this->hasMany(WaitingList::class);
  }
>>>>>>> 2d880d3781173a458f5d4cfd11ac4cc6baff0a83
}
