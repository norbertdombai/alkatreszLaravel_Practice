<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alkatresz extends Model
{
    use HasFactory;

    protected $fillable = ['cikkszam','alkatreszNev','ar','raktaron'];

    public function Alkatresz()
    {
        return $this->hasMany(Alkatresz::class);
    }

}
