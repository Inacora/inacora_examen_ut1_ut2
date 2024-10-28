<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HAsFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['subrayado', 'negrita'];
}
