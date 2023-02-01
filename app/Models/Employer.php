<?php

namespace App\Models;

use App\Traits\ModelBootingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory, ModelBootingTrait;

    protected $guarded = [
        'create_at',
        'updated_at',
        'deleted_at',
    ];
}
