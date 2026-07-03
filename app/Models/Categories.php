<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Articles;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    //
    use HasUuids;
    protected $fillable = ['title'];

    public function articles(): HasMany 
    {
        return $this->hasMany(Articles::class, 'categories_id');
    }
}
