<?php

namespace Modules\Request\Entities;

use App\Models\File;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Request\Entities\RequestType;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestContent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Request\Database\factories\RequestContentFactory::new();
    }


    public function requestType()
    {
        return $this->belongsTo(RequestType::class, 'request_type_id');
    }


    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }


    public function files()
    {
        return $this->morphMany(File::class, "fileable");
    }


}
