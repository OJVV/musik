<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['subject', 'content', 'pdf_path'];

    public function subscribers()
    {
        return $this->belongsToMany(Subscriber::class);
    }
}
