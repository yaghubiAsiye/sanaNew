<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Request\Entities\RequestType;
use Modules\Request\Entities\RequestContent;
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
}
