<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','body'];
    
    protected $with =['category'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters) : void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
                $query->where('title','like','%'. $search   . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category)=>
                $query->whereHas('category',fn($query) => $query->where('slug',$category))
        );
    }

}