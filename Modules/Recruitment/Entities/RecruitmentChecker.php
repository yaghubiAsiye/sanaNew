<?php

namespace Modules\Recruitment\Entities;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Modules\Recruitment\Entities\Recruitment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecruitmentChecker extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Recruitment\Database\factories\RecruitmentCheckerFactory::new();
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class, 'recruitment_id');
    }
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

   public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
