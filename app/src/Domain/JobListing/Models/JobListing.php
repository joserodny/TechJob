<?php

declare(strict_types=1);

namespace App\src\Domain\JobListing\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'title',
        'location',
        'website',
        'email',
        'tags',
        'description',
        'logo',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%'.request('search').'%')
                  ->orWhere('description', 'like', '%'.request('search').'%')
                  ->orWhere('tags', 'like', '%'.request('search').'%');
        }
    }

    //user relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
