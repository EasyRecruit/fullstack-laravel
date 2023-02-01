<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\ModelBootingTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, ModelBootingTrait;

    protected $guarded = [
        'create_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $morph_types = [
        'admin' => 'App\Models\Administrator',
        'employer' => 'App\Models\Employer'
    ];

    public function authenticatable(){
        return $this->morphTo();
    }

    public function userType() : Attribute{
        return new Attribute(
            get: fn($type) => array_search($this->authenticatable_type, $this->morph_types)
        );
    }
}
