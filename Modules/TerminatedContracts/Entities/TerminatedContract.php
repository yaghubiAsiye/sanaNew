<?php

namespace Modules\TerminatedContracts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TerminatedContract extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\TerminatedContracts\Database\factories\TerminatedContractFactory::new();
    }
}
