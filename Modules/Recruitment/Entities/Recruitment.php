<?php

namespace Modules\Recruitment\Entities;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
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
}
