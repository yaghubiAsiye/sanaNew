<?php

namespace Modules\RenewedContracts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RenewedContract extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\RenewedContracts\Database\factories\RenewedContractFactory::new();
    }
}
