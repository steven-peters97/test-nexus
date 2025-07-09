<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Entry extends Model
{
    protected $table = 'entries';

    protected $fillable = [
        'bird_count',
        'notes'
    ];

}
