<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function leeds()
    {
        return $this->hasMany(Leed::class);
    }
}
