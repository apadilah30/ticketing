<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transportation extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the type associated with the Transportation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(TransportationType::class, 'id', 'transportation_type_id');
    }
}
