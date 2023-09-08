<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['content', 'img', 'created_at', 'updated_at', 'deleted_at'];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}