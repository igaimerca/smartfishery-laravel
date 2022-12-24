<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;
    protected $fillable = [
        'Env_Id', 'Temperature', 'pH', 'Pond_Id', 'Fishponds', 'Fish_Id', 'coop_ID'
    ];
    protected $primaryKey = 'Env_Id';
}
