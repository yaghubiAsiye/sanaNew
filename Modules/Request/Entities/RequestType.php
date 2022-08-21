<?php

namespace Modules\Request\Entities;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Modules\Request\Entities\RequestContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestType extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Request\Database\factories\RequestTypeFactory::new();
    }


    public function requestContents()
    {
        return $this->hasMany(RequestContent::class);
    }


    public function starter()
    {
        return $this->belongsTo(User::class, 'starter_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
