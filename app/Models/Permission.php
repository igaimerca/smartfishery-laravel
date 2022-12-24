<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'Perm_Id', 'Perm_detail', 'role_Id'
    ];
    protected $primaryKey = 'Perm_Id';
}
