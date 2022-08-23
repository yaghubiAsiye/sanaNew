<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Request\Entities\RequestType;
use Modules\Request\Entities\RequestContent;
use Modules\Recruitment\Entities\Recruitment;
use Modules\Recruitment\Entities\RecruitmentChecker;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function requestContent()
    {
        return $this->hasMany(RequestContent::class);
    }
    public function requestType()
    {
        return $this->hasMany(RequestType::class);
    }

    public function recruitmentChecker()
    {
        return $this->hasMany(RecruitmentChecker::class);
    }

    public function recruitment()
    {
        return $this->hasMany(Recruitment::class);
    }
}
