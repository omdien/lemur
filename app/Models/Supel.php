<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Lembur()
    {
        return $this->hasMany(Lembur::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
