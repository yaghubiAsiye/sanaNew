<?php

namespace Modules\Election\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Election\Entities\Candidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Election extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Election\Database\factories\ElectionFactory::new();
    }
    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
