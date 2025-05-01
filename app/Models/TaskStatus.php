<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    protected $fillable = ['name', 'color', 'order'];

    public function tasks()
    {
        return $this->hasMany(Tache::class, 'status_id');
    }
}
