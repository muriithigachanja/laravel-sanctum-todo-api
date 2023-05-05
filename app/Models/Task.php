<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_id', 'name', 'description', 'due_date'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
