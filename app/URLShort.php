<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URLShort extends Model
{
    protected $table = 'url_short';
    protected $primaryKey = 'id';

    protected $fillable = [
        'url',
        'short'
    ];
}
