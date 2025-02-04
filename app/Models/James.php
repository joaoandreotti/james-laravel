<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class James extends Model
{
    use HasUuids, HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
