<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'roles');
    }
}
