<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerAspiration extends Model
{
    use HasFactory;
    public function Aspiration()
    {
        $this->hasOne(Aspiration::class);
    }
}
