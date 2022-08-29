<?php

namespace Modules\MonthlyPerformance\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonthlyPerformanceLog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\MonthlyPerformance\Database\factories\MonthlyPerformanceLogFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
