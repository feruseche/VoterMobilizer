<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Region extends Model
{
    use HasFactory;

    protected $perPage  = 10;
    protected $fillable = ["name", "leader", "email", "mobile"];

    protected $timestamp = false;

    public function sectors() : HasMany
    {
        return $this->hasMany(Sector::class);
    }

    public function voters() : HasManyThrough
    {
        return $this->hasManyThrough(
            Voter::class,
            Sector::class,
            "region_id",
            "sector_id",
            "id",
            "id"
        );
    }

    public function centers() : HasMany
    {
        return $this->hasMany(Center::class);
    }
}
