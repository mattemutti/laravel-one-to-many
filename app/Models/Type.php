<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    /**
     * Get all of the Projects for the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
