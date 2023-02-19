<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;

class AdminModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_admins';

    protected $fillable = [
        'username',
        'password',
        'class',
        'permissions'
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

}
