<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrainer extends Model
{
    use HasFactory;
    protected $guarded;

    protected $with = ['trainer'];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

}
