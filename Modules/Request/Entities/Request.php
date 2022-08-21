<?php

namespace Modules\Request\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Request\Database\factories\RequestFactory::new();
    }

    // public function operator()
    // {
    //     return $this->belongsTo(User::class, 'operator_id');
    // }

    // public function employee()
    // {
    //     return $this->belongsTo(User::class, 'employee_id');
    // }
}
