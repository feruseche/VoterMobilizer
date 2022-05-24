<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voter extends Model
{
    use HasFactory;

    protected $perPage  = 10;
    protected $fillable = ["dni","name", "lastname", "address", "email", "mobile", "sector_id", "voting_center_id"];

    protected $timestamp = false;

    public function sector() : BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }

    public function region() : BelongsTo
    {
        return $this->sector()->belongsTo(Region::class);
    }

    public function votingcenter() : BelongsTo
    {
        return $this->belongsTo(VotingCenter::class);
    }
}
