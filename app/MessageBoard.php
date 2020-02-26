<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageBoard extends Model
{
    //
    public $table = 'MessageBoard';
    public $primaryKey = 'id';
    protected $fillable = [
        'username','content',
    ];
    public $timestamps = false;
}
