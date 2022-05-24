<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VotingCenter extends Model
{
    use HasFactory;

    protected $perPage  = 10;
    protected $fillable = ["code", "name", "address", "region_id"];

    protected $timestamp = false;

    public function region() : BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function voters() : HasMany
    {
        return $this->hasMany(Voter::class);
    }
}