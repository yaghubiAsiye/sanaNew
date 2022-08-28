<?php

namespace Modules\Recruitment\Entities;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Modules\Recruitment\Entities\RecruitmentChecker;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recruitment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Recruitment\Database\factories\RecruitmentFactory::new();
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    

    public function recruitmentCheckers()
    {
        return $this->hasMany(RecruitmentChecker::class);
    }
}
