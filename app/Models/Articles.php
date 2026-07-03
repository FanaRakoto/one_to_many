<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Categories;

class Articles extends Model
{
    //
    use HasUuids;

    protected $fillable = ['title', 'description', 'prix', 'categories_id'];

    public function categories() {
        return $this->belongsTo(Categories::class);
    }
    
}
