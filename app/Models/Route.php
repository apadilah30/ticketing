<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Route extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transportation(): HasOne
    {
        return $this->hasOne(Transportation::class, 'id' , 'transportation_id');
    }
}
