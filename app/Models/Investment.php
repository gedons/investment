<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'description'
    ];

    public function profiles()
    {
        return $this->hasMany(Activity::class);
    }

}
