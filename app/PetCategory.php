<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $table = 'pet_categories';

    /**
     * Scope a query to only include pet categories that are considered `common`.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCommon($query)
    {
        return $query->where('is_common', 1);
    }

    /**
     * Get the name of the pet's category.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return $value;
    }
}
