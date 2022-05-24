<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    use HasFactory;

    protected $perPage  = 10;
    protected $fillable = ["name", "leader", "email", "mobile", "region_id"];

    public $timestamps = false;

    public function voters() : HasMany
    {
        return $this->hasMany(Voter::class);
    }

    public function region() : BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

}
