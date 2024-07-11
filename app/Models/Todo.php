<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['title', 'description', 'user_id', 'status'];

    // Relation with user table [many to one]
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
