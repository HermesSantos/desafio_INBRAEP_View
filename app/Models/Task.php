<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tarefas';
    protected $primaryKey = 'id';
    protected $fillable = ['description', 'status'];
}
