<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\statuss;


class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'car',
        'id_user',
        'status',
    ];
 public function user() {
        return $this->belongsTo(User::class,"id_user",'id');
    }

    public function status_app() {
        return $this->belongsTo(Statuss::class,"status",'id');
    }
}
