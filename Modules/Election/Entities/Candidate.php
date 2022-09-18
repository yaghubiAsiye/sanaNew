<?php

namespace Modules\Election\Entities;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Modules\Election\Entities\Election;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Election\Database\factories\CandidateFactory::new();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function elections()
    {
        return $this->hasMany(Election::class);
    }
}
