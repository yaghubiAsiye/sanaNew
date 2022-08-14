<?php

namespace Modules\MonthlyPerformance\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonthlyPerformanceTehran extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\MonthlyPerformance\Database\factories\MonthlyPerformanceTehranFactory::new();
    }
}
