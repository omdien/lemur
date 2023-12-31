<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Gambar()
    {
        return $this->hasMany(Gambar::class);
    }

    public function Supel()
    {
        return $this->belongsTo(Supel::class);
    }
}
