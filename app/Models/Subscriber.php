<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['name', 'email'];

    public function newsletters()
    {
        return $this->belongsToMany(Newsletter::class);
    }
}
