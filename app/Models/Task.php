<?php

namespace App\Models;

use App\Enum\TaskStatus;
use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<TaskFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];

    protected $casts = [
        'status' => TaskStatus::class
    ];
}
