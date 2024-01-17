<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applications;

class Statuss extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
    ];

    function application() {
        return $this->hasMany(Applications::class,"status");
    }
}
