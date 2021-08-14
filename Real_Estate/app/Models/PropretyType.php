<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropretyType extends Model
{
    protected $fillable = [
        'name', 
    ];

    public $timestamps = false;

    public function Proprety()
    {
        return $this->hasMany(Proprety::class);
    }
}
