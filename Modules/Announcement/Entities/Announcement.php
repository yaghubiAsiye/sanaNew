<?php

namespace Modules\Announcement\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Announcement\Database\factories\AnnouncementFactory::new();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
