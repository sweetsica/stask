<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function workingTasks()
    {
        return $this->hasOne(Task::class, 'userIdWork', 'id');
    }
    public function leadTasks()
    {
        return $this->hasOne(Task::class, 'id', 'userIdLead');
    }
}
