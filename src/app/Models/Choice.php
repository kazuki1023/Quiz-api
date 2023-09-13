<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = ['quiz_id', 'answer', 'valid'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
