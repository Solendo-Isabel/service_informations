<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'it_id_user',
        'coment'
    ];

    protected $table = 'coments';
}
